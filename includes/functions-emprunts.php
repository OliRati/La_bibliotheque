<?php
function listerEmprunts($pdo) {
    $sql  ="SELECT * FROM emprunt ORDER BY id_emprunt DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $emprunts = $stmt->fetchAll();

    return $emprunts;
}