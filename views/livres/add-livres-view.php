<?php 
$titleBibliothèque = "Ajout d'un livre";
require PATH_PROJET . '/views/partials/header.php'; ?>
        <h1>Ajouter un livre</h1>
        <form action="" method="POST">
            <div>
                <label for="auteur">Auteur</label>
                <input type="text" name="auteur" required>
            </div>
             <div>
                <label for="titre">Titre</label>
                <input type="text" name="titre" required>
            </div>
            <div>
                <label for="resume">Résumé</label>
                <input type="text" name="resume" required>
            </div>    
            <div>
                <label for="genre">Genre</label>
                <input type="text" name="genre" required>
            </div>     
            <div>
                <button type="submit" name="envoyer">Ajouter livre</button>
            </div>               
        </form>
<?php require PATH_PROJET . '/views/partials/footer.php'; ?>