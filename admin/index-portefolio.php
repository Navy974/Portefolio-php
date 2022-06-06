<?php
include("./inc/session.inc.php");

//On démarre la session pour afficher d'éventuels message. session_start() doit étre la première ligne de code de la 
//page
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("./inc/head.inc.php")
    ?>
    <title>Back-office||Portefolio</title>
</head>
<body class="bg-light">
    <?php
    include('./inc/header.inc.php')
    ?>
    <div class="container bg-white shadow">
        <h1>Gérer le portefolio</h1>
        <div class="row justify-content-end">
            <a href="./new-portefolio.php" class="btn btn-primary mr-3 mb-3">Nouveau</a>
        </div>
        <?php 
        if(isset($_SESSION["message"])){
            echo ' <div class="alert alert-success">'.$_SESSION["message"].'</div>';
            unset($_SESSION["message"]);
        };
        ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Texte</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //1 - Connexion
                require_once('./core/connexion.php');
                //2 - Ecriture de la requête
                $sql = 'SELECT * FROM portefolio';
                //3 - Execution de la requête
                $req = mysqli_query($connexion, $sql) or die(mysqli_error($connexion));
                //4 - Traitement des données 
                while($bloc = mysqli_fetch_array($req)){
                ?>
                <tr>
                    <th scope="row"><?php echo $bloc['id'];?></th>
                    <td><?php echo $bloc['titre'];?></td>
                    <td><?php echo $bloc['texte'];?></td>
                    <td>
                        <div class="d-flex">
                            <a href="../admin/core/delete-portefolio.php?id=<?php echo $bloc['id'];?>" class="btn btn-danger mr-2" onclick="return confirm ('Vraiment ?')"><i class="fa fa-trash"></i></a>
                            <a href="edit-portefolio.php?id=<?php echo $bloc['id'];?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
                        </div>
                        
                    </td>
                </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="container bg-white shadow">
        <h1>Gérer la gallery</h1>
        <div class="row justify-content-end">
            <a href="./new-portefolio-gallery.php" class="btn btn-primary mr-3 mb-3">Nouveau</a>
        </div>
        <?php 
        if(isset($_SESSION["message"])){
            echo ' <div class="alert alert-success">'.$_SESSION["message"].'</div>';
            unset($_SESSION["message"]);
        };
        ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //1 - Connexion
                require_once('./core/connexion.php');
                //2 - Ecriture de la requête
                $sql = 'SELECT * FROM portefolio_gallery';
                //3 - Execution de la requête
                $req = mysqli_query($connexion, $sql) or die(mysqli_error($connexion));
                //4 - Traitement des données 
                while($bloc = mysqli_fetch_array($req)){
                ?>
                <tr>
                    <th scope="row"><?php echo $bloc['id'];?></th>
                    <td><?php echo $bloc['photo'];?></td>
                    <td>
                        <div class="d-flex">
                            <a href="../admin/core/delete-portefolio-gallery.php?id=<?php echo $bloc['id'];?>" class="btn btn-danger mr-2" onclick="return confirm ('Vraiment ?')"><i class="fa fa-trash"></i></a>
                            <a href="edit-portefolio-gallery.php?id=<?php echo $bloc['id'];?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
                        </div>
                        
                    </td>
                </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php
    include("./inc/javascript.inc.php")
    ?>
</body>

</html>