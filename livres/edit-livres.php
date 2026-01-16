<?php
include PHP_ROOT . '/includes/functions-livres.php';

$idEditLivres = $_GET['id'] ?? null;

if (!is_numeric($idEditLivres)) {
    dd("Ce livre n'existe pas !!!");
}

$errors = [];

$livre = getLivre($pdo, $idEditLivres);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])) {

    $auteur = nettoyer($_POST['auteur']);
    $titre = nettoyer($_POST['titre']);
    $resume = nettoyer($_POST['resume']);
    $genre = nettoyer($_POST['genre']);

    if (empty($auteur) || empty($titre) || empty($resume) || empty($genre)) {
        $errors[] = 'Tous les champs sont requis.';
    } else {
        if (updateLivre($pdo, $auteur, $titre, $resume, $genre, $idEditLivres)) {
            redirect('?page=list-livres');
        } else {
            $errors[] = 'Erreur lors de la mise à jour du livre.';
        }
    }
}

include PHP_ROOT . '/views/livres/edit-livres-view.php';