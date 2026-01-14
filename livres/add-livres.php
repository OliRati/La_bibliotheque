<?php
include 'includes/functions-livres.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])) {

 $auteur = nettoyer($_POST['auteur']);
    $titre = nettoyer($_POST['titre']);
    $resume = nettoyer($_POST['resume']);
    $genre = nettoyer($_POST['genre']);

    if (ajoutLivre($pdo, $auteur, $titre, $resume, $genre)) {
        redirect('?page=list-livres');
    }

}

include PHP_ROOT . '/views/livres/add-livres-view.php';
