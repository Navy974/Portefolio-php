<!DOCTYPE html>
<html lang="fr">
<head>
<?php
    include("./inc/head.inc.php")
    ?>
    <title>Ajout de formation</title>
</head>
<body>
<?php
    include('./inc/header.inc.php')
    ?>
    <div class="container bg-white shadow py-2">
        <h1>Créer un portefolio</h1>
        <hr>
        <form action="./core/add-portefolio.php" method="post">
        <div class="from-group">
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" class="form-control">
        </div>
        <div class="form-group">
            <label for="texte">Texte</label>
            <textarea name="texte" id="texte" rows="4" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-dark">Ajouter</button>
        </form>
    </div>
<?php
    include("../inc/javascript.inc.php")
    ?>
</body>
</html>