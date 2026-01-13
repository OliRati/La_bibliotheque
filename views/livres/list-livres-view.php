<?php
$titleBibliothèque = "Liste des livres";
require PATH_PROJET . '/views/partials/header.php';
    if (count($livreArray) === 0) :
        echo '<h3>Aucun livre !</h3>';
        echo '<a href="' .  WEB_ROOT . '/livre/add-livre.php" role="button">Ajouter un livre</a>';
        die();
    endif;
?>
    <h1>Liste des livres</h1>
    <a href="<?= WEB_ROOT . '/livre/add-livre.php' ?>" role="button">Ajouter un livre</a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Auteur</th>
                <th>Titre</th>
                <th>Résumé</th>
                <th>Genre</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($livreArray as $livre) : ?>
                <tr>
                    <td><?= $livre['id_livre']; ?></td>
                    <td><?= $livre['auteur']; ?></td>
                    <td><?= $livre['titre']; ?></td>
                    <td><?= $livre['resume']; ?></td>
                    <td><?= $livre['genre']; ?></td>
                    <td>
                        <a href="<?= WEB_ROOT . '/livre/edit-livre.php?id=' . $livre['id_livre'] ?>" role="button">Edit</a>
                        <a href="<?= WEB_ROOT . '/livre/del-livre.php?id=' . $livre['id_livre'] ?>" role="button" onclick="return confirm('Etes vous certain de vouloir supprimer ce livre ?');">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<?php require PATH_PROJET . '/views/partials/footer.php';  ?>