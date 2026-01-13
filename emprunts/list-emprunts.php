<?php
require PHP_ROOT . '/includes/functions-emprunts.php';

$emprunts = listerEmprunts($pdo);

include PHP_ROOT . '/views/emprunt/list-emprunts-view.php' ;