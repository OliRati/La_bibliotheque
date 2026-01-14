<?php
$idEditLivres = $_GET['id'] ?? null;

if (! is_numeric($idEditLivres)  ) {
    dd("Ce livre n'existe pas !!!");
}

$livres = getlivres($pdo,$idEditLivres);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])) {

    $auteur = nettoyer($_POST['auteur']);
    $titre = nettoyer($_POST['titre']);
    $resume = nettoyer($_POST['resume']);
    $genre = nettoyer($_POST['genre']);

    $testUpdate = updateLivre($pdo, $auteur, $titre, $resume, $genre, $idEditLivres);
    
    redirect('/livres/list-livres.php');
}

include PHP_ROOT . '/views/livres/edit-livres-view.php';