<!DOCTYPE html>
<html lang="fr">
<head>
<?php
    include("./inc/head.inc.php")
    ?>
    <title>Ajouter</title>
</head>
<body>
<?php
    include('./inc/header.inc.php')
    ?>
    <div class="container bg-white shadow py-2">
        <h1>Ajouter une photo</h1>
        <hr>
        <form action="../core/add-portefolio-gallery.php" method="post" enctype="multipart/form-data">
        <div class="from-group position-relative">
            <label for="image">image</label>
            <input type="file" name="image" id="image" class="form-control noAction" accept="image/png, image/jpg, image/jpeg">
            <button id="pseudoFile" class="btn btn-sm btn-dark">Charger une Image</button>
        </div>
        <button type="submit" class="btn btn-dark">Ajouter</button>
        </form>
    </div>
<?php
    include("../inc/javascript.inc.php")
?>
<script>
        $("#pseudoFile").on("click", function(event){
            event.preventDefault();
            // on déclenche un faux clic user sur l'input de type file
            $("#image").trigger("click");
        });
    </script>
</body>
</html>