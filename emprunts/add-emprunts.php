<?php
require PHP_ROOT . '/includes/functions-emprunts.php';

$emprunt = [];
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $emprunt['id_livre'] = nettoyer($_POST['id_livre']);
    $emprunt['id_utilisateur'] = nettoyer($_POST['id_utilisateur']);
    $emprunt['date_sortie'] = nettoyer($_POST['date_sortie']);
    $emprunt['date_rendu'] = nettoyer($_POST['date_rendu']);
    $emprunt['statut'] = nettoyer($_POST['statut']);

    // vérifier que l'id du livre existe dans la base de données 
    // vérifier que l'id de l'utilisateur existe dans la base de données et que ce soit bien un abonné 

    $state = addEmprunt($pdo, $emprunt);
    if ($state) {
        redirect("?page=list-emprunts");
        die();
    }

    $error[] = 'Impossible d\'ajouter cet emprunt.';
} else {
    $emprunt = [
    'id_livre' => '',
    'id_utilisateur' => '',
    'date_sortie' => '',
    'date_rendu'=> '',
    'statut' => ''
    ];
}

$title_text = 'Ajouter un emprunt';
$submit_text ='Ajouter';

require PHP_ROOT.'/views/emprunt/emprunt-view.php';