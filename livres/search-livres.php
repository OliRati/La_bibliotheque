<?php
include 'includes/functions-livres.php';
$searchTerm = $_GET['search'] ?? '';
$livres = searchLivres($pdo, $searchTerm);
dd($livres);
include 'views/partials/header.php';
?>
<form method="GET">
    <input 
        type="text" 
        name="search" 
        placeholder="Rechercher un livre..."
    >
    <button type="submit">🔍</button>
</form>
<?php
include 'views/partials/footer.php';

