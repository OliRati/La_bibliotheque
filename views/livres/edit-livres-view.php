<?php 
$titleBibliothèque = "Edition d'un livre";
require PATH_PROJET . '/views/partials/header.php'; ?>
        <h1>Editer un livre</h1>
        <form action="?id=<?= $livre['id_livre']; ?>" method="POST">
            <div>
                <label for="auteur">Auteur</label>
                <input type="text" name="auteur" value="<?= $livre['auteur']; ?>"  required>
            </div>
             <div>
                <label for="titre">Titre</label>
                <input type="text" name="titre" value="<?= $livre['titre']; ?>" required>
            </div>
            <div>
                <label for="resume">Résumé</label>
                <input type="text" name="resume" value="<?= $livre['resume']; ?>" required>
            </div>    
            <div>
                <label for="genre">Genre</label>
                <input type="text" name="genre" value="<?= $livre['genre']; ?>"  required>
            </div>     
            <div>
                <button type="submit" name="envoyer">Editer livre</button>
            </div>               
        </form>
<?php require PATH_PROJET . '/views/partials/footer.php'; ?>