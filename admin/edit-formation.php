<!DOCTYPE html>
<html lang="fr">
<head>
<?php
    include("./inc/head.inc.php")
    ?>
    <title>Modifier</title>
</head>
<body class="bg-secondary">
<?php
    include('./inc/header.inc.php')
    ?>
    <div class="container bg-white shadow py-2">
        <h1>Modifier la formation</h1>
        <hr>
        <?php 
        //1- Connexion
        require_once('./core/connexion.php');
        // 2- Ecriture de la requête
        $sql = 'SELECT * FROM formation WHERE id='.$_GET['id'];
        // 3 - Execution de la requête
        $req = mysqli_query($connexion, $sql) or die(mysqli_error($connexion));
        // 4 - traitement des donées
        $bloc = mysqli_fetch_array($req);
        ?>
        <form action="./core/update-formation.php" method="POST">
            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" name="titre" id="titre" class="form-control" value="<?php echo $bloc["titre"]; ?>">
            </div>
            <div class="form-group">
                <label for="texte">Texte</label>
                <textarea name="texte" id="texte"  rows="4" class="form-control"><?php echo $bloc["texte"]; ?></textarea>
            </div>
            <button type="submit" class="btn btn-dark">Modifier</button>
            <input type="hidden" name="form-id" value="<?php echo $bloc["id"]; ?>">
        </form>
    </div>

<?php
    include("./inc/javascript.inc.php")
    ?>
</body>
