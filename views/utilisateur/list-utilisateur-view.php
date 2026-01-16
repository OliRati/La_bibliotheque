<?php require PHP_ROOT . '/views/partials/header.php'; ?>

<h1 class="title">Liste des utilisateurs</h1>

<div class="centered">
    <a class="button" href="?page=add-utilisateur" role="button">Ajouter un utilisateur</a>
</div>

<?php if (count($utilisateurArray) === 0) { ?>
    <div class="subtitle">Aucun utilisateur enregistré</div>
<?php } else { ?>
    <table>
        <thead>
            <tr>
                <th>Id Utilisateur</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Rôle</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($utilisateurArray as $utilisateur): ?>
                <tr>
                    <td><?= $utilisateur['id_utilisateur'] ?></td>
                    <td><?= htmlspecialchars($utilisateur['nom']); ?></td>
                    <td><?= htmlspecialchars($utilisateur['prenom']); ?></td>
                    <td><?= htmlspecialchars($utilisateur['email']); ?></td>
                    <td><?= htmlspecialchars($utilisateur['role']); ?></td>
                    <td>
                        <a href="<?= WEB_ROOT . '?page=edit-utilisateur&id=' . $utilisateur['id_utilisateur'] ?>"
                            role="button">Editer</a>

                        <a class="caution" href="<?= WEB_ROOT . '?page=del-utilisateur&id=' . $utilisateur['id_utilisateur'] ?>"
                            role="button"
                            onclick="return confirm('Etes-vous sur de vouloir supprimer cet utilisateur ?');">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<?php } ?>

<?php
include 'views/partials/footer.php';