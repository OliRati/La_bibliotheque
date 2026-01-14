<?php require PHP_ROOT . '/views/partials/header.php'; ?>
<h1 class="title">Inscription</h1>

<form method="post">
    <?php if (array_key_exists("id_utilisateur", $utilisateur)) { ?>
        <input type="hidden" name="id_utilisateur" value="<?= $utilisateur['id_utilisateur'] ?>">
    <?php } ?>
    <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" value="<?= $utilisateur['nom'] ?>">
    </div>
    <div>
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom" value="<?= $utilisateur['prenom'] ?>">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?= $utilisateur['email'] ?>">
    </div>
    <div>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <label for="password_confirm">Confirmation du mot de passe</label>
        <input type="password" name="password_confirm" id="password_confirm">
    </div>
    <input type="submit" name="submit" value="<?= $submit_text ?>">
    <?php if (!empty($errors)) { ?>
        <div class="error">
            <?php foreach ($errors as $error) { ?>
                <p><?= $error ?></p>
            <?php } ?>
        </div>
    <?php } ?>
</form>
<?php require PHP_ROOT . '/views/partials/footer.php'; ?>