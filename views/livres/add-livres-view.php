<?php require PHP_ROOT . '/views/partials/header.php'; ?>

<h1 class="title">Ajouter un livre</h1>
<form action="" method="POST">
    <div>
        <label for="auteur">Auteur</label>
        <input type="text" name="auteur" id="genre" required>
    </div>
    <div>
        <label for="titre">Titre</label>
        <input type="text" name="titre" id="titre" required>
    </div>
    <div>
        <label for="resume">Résumé</label>
        <input type="text" name="resume" id="resume" required>
    </div>
    <div>
        <label for="genre">Genre</label>
        <input type="text" name="genre" id="genre" required>
    </div>
    <div>
        <input type="submit" name="envoyer" value="Ajouter livre">
        <?php if (!empty($errors)) { ?>
            <div class="error">
                <?php foreach ($errors as $error) { ?>
                    <p><?= $error ?></p>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</form>

<?php require PHP_ROOT . '/views/partials/footer.php'; ?>