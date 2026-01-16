<?php
include PHP_ROOT . '/includes/functions-livres.php';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])) {

    $auteur = nettoyer($_POST['auteur']);
    $titre = nettoyer($_POST['titre']);
    $resume = nettoyer($_POST['resume']);
    $genre = nettoyer($_POST['genre']);

    if (empty($auteur) || empty($titre) || empty($resume) || empty($genre)) {
        $errors[] = 'Tous les champs sont requis.';
    } else {
        if (ajoutLivre($pdo, $auteur, $titre, $resume, $genre)) {
            redirect('?page=list-livres');
        } else {
            $errors[] = 'Erreur lors de l\'ajout du livre.';
        }
    }
}

include PHP_ROOT . '/views/livres/add-livres-view.php';
