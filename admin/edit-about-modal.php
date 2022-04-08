<!DOCTYPE html>
<html lang="fr">
<head>
<?php
    include("./inc/head.inc.php")
    ?>
    <title>Modifier une modal</title>
</head>
<body class="bg-secondary">
<?php
    include('./inc/header.inc.php')
    ?>
    <div class="container bg-white shadow py-2">
        <h1>Modifier la modal</h1>
        <hr>
        <?php 
        //1- Connexion
        require_once('./core/connexion.php');
        // 2- Ecriture de la requête
        $sql = 'SELECT * FROM about_modal WHERE id='.$_GET['id'];
        // 3 - Execution de la requête
        $req = mysqli_query($connexion, $sql) or die(mysqli_error($connexion));
        // 4 - traitement des donées
        $bloc = mysqli_fetch_array($req);
        ?>
        <form action="./core/update-about-modal.php" method="POST">
            <div class="form-group">
                <label for="titre_modal">Titre</label>
                <input type="text" name="titre_modal" id="titre_modal" class="form-control" value="<?php echo $bloc["titre_modal"]; ?>">
            </div>
            <div class="form-group">
                <label for="texte_modal">Texte</label>
                <textarea name="texte_modal" id="texte_modal"  rows="4" class="form-control"><?php echo $bloc["texte_modal"]; ?></textarea>
            </div>
            <div class="form-group">
                <label for="icone_modal">Icone</label>
                <input type="text" name="icone_modal" id="icone_modal" class="form-control"  value="<?php echo $bloc["icone_modal"]; ?>">
            </div>
            <button type="submit" class="btn btn-dark">Modifier</button>
            <input type="hidden" name="form-id" value="<?php echo $bloc["id"]; ?>">
        </form>
    </div>

<?php
    include("./inc/javascript.inc.php")
    ?>
</body>
