<?php
require PHP_ROOT . '/includes/functions-livres.php';

$livres = listerLivres($pdo);

include PHP_ROOT . '/views/livres/list-livres-view.php';