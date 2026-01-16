<?php
require_once PHP_ROOT . '/includes/functions-utilisateur.php';

$nom = '';
$prenom = '';
$email = '';
$role = 'abonne';

$errors = [];

// Vérifie si le formulaire a été envoyé
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])) {

    // Nettoyage des données
    $nom = nettoyer($_POST['nom'] ?? '');
    $prenom = nettoyer($_POST['prenom'] ?? '');
    $email = nettoyer($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $password_confirm = trim($_POST['password_confirm'] ?? '');
    $role = nettoyer($_POST['role'] ?? '');

    // Vérification des champs obligatoires
    if (empty($nom) || empty($prenom) || empty($email) || empty($password)) {
        $errors[] = 'Tous les champs sont obligatoires';
    }

    // Vérification email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email invalide";
    }

    if ($password !== $password_confirm) {
        $errors[] = "Le mot de passe et sa confirmation sont différents.";
    }

    if (empty($errors)) {
        // Hashage sécurisé du mot de passe
        // $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $passwordHash = md5($password);

        // Insertion de l'utilisateur en base
        $success = ajoutUtilisateur(
            $pdo,
            $nom,
            $prenom,
            $email,
            $passwordHash,
            $role
        );

        if ($success) {
            redirect("?page=list-utilisateur");
            exit;
        } else {
            $errors[] = "Erreur : ajout de l'utilisateur impossible.";
        }
    }
}

// Affichage du formulaire
require PHP_ROOT . '/views/utilisateur/add-utilisateur-view.php';
