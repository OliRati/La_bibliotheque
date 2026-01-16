<?php
include PHP_ROOT . '/includes/functions-livres.php';

$idSuppLivres = $_GET['id'] ?? null;

if (!is_numeric($idSuppLivres)) {
    dd("Ce livre n'existe pas !!!");
}

$suppResultLivres = supprimerLivre($pdo, $idSuppLivres);

if ($suppResultLivres) {
    redirect('?page=list-livres');
}
