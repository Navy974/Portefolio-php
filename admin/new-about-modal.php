<!DOCTYPE html>
<html lang="fr">
<head>
<?php
    include("./inc/head.inc.php")
    ?>
    <title>Créer une modal</title>
</head>
<body>
<?php
    include('./inc/header.inc.php')
    ?>
    <div class="container bg-white shadow py-2">
        <h1>Ajouter une modal</h1>
        <hr>
        <form action="./core/add-about-modal.php" method="post">
        <div class="from-group">
            <label for="titre_modal">Titre</label>
            <input type="text" name="titre_modal" id="titre_modal" class="form-control">
        </div>
        <div class="form-group">
            <label for="texte_modal">Texte</label>
            <textarea name="texte_modal" id="texte_modal" rows="4" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="icone_modal">Icone</label>
            <input type="text" name="icone_modal" id="icone_modal" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark">Ajouter</button>
        </form>
    </div>
<?php
    include("../inc/javascript.inc.php")
    ?>
</body>
</html>