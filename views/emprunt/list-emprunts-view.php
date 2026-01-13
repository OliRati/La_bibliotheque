<?php require PHP_ROOT . '/views/partials/header.php'; ?>

<h1 class="title">Liste de emprunts</h1>

<table>
    <thead>
        <tr>
            <th>Id Emprunt</th>
            <th>Id Livre</th>
            <th>Id Utilisateurs</th>
            <th>Date de sortie</th>
            <th>Date de rendu</th>
            <th>Etat</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($emprunts as $emprunt) { ?>
            <tr>
                <td><?= $emprunt['id_emprunt'] ?></td>
                <td><?= $emprunt['id_livre'] ?></td>
                <td><?= $emprunt['id_utilisateur'] ?></td>
                <td><?= $emprunt['date_sortie'] ?></td>
                <td><?= $emprunt['date_rendu'] ?></td>
                <td><?= $emprunt['statut'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php require PHP_ROOT . '/views/partials/footer.php'; ?>