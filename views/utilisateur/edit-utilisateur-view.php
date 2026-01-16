<?php include PHP_ROOT . '/views/partials/header.php'; ?>

<h1 class="title">Editer un utilisateur</h1>

<?php if (!empty($errors)): ?>
    <div>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<form action="" method="POST">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($nom); ?>" required>
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" value="<?= htmlspecialchars($prenom); ?>" required>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?= htmlspecialchars($email); ?>" required>
    </div>
    <div>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <label for="password_confirm">Confirmation mot de passe</label>
        <input type="password" name="password_confirm" id="password_confirm">
    </div>
    <div>
        <label for="role">Rôle</label>
        <select name="role" id="role">
            <option value="abonne" <?= $role === 'abonne' ? 'selected' : '' ?>>
                Abonne
            </option>
            <option value="employe" <?= $role === 'employe' ? 'selected' : '' ?>>
                Employe
            </option>
            <option value="admin" <?= $role === 'admin' ? 'selected' : '' ?>>
                Administrateur
            </option>
        </select>
    </div>
    <div>
        <input type="submit" value="Modifier Utilisateur" name="envoyer">
        <?php if (!empty($errors)) { ?>
            <div class="error">
                <?php foreach ($errors as $error) { ?>
                    <p><?= $error ?></p>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</form>

<?php include PHP_ROOT . '/views/partials/footer.php';
