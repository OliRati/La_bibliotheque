<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])) {

 $auteur = nettoyer($_POST['auteur']);
    $titre = nettoyer($_POST['titre']);
    $resume = nettoyer($_POST['resume']);
    $genre = nettoyer($_POST['genre']);

    ajoutlivres($pdo, $auteur, $titre, $resume, $genre);

    $livresInserted = getLastInsertId($pdo);

    if ($livresInserted) {
        redirect('/livres/list-livres.php');
    }
}

include PHP_ROOT . '/views/livres/add-livres-view.php';
