<!DOCTYPE html>
<html lang="fr">
<head>
<?php
    include("./inc/head.inc.php")
    ?>
    <title>Modifier</title>
</head>
<body>
<?php
    include('./inc/header.inc.php')
    ?>
    <div class="container bg-white shadow py-2">
        <h1>Modifier la gallery</h1>
        <hr>
        <?php 
        // 1 -
        require_once("../core/connexion.php");
        // 2- 
        $sql = 'SELECT * FROM portefolio_gallery WHERE id='.$_GET['id'];
        //3 - 
        $req = mysqli_query($connexion, $sql) or die(mysqli_error($connexion));
        //4 -
        $carousel = mysqli_fetch_array($req)
        ?>
        <form action="../core/update-portefolio-gallery.php" method="post" enctype="multipart/form-data">
        <div class="from-group position-relative">
            <label for="image">Image</label>
            <img src="../images/<?php echo $carousel['photo'];?>" alt="" class="img-fluid img-uptdate">
            <input type="file" name="image" id="image" class="form-control noAction" accept="image/png, image/jpg, image/jpeg">
            <button id="pseudoFile" class="btn btn-sm btn-dark">Charger une Image</button>
        </div>
        <button type="submit" class="btn btn-dark">Modifier</button>
        <input type="hidden" name="id" value="<?php echo $carousel['id']; ?>">
        <input type="hidden" name="current-photo" value="<?php echo $carousel['photo']; ?>">
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