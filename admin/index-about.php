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
    <title>Document</title>
</head>

<body class="bg-secondary">
    <?php
    include('./inc/header.inc.php')
    ?>
    <div class="container bg-white shadow">
        <h1>Gérer les About</h1>
        <div class="row justify-content-end">
            <a href="./new-about.php" class="btn btn-info mr-3 mb-3">Nouveau</a>
        </div>
        <!-- Prise en charge des messages de session php -->
        <?php 
        //On vérifie si un message existe dans la session
        if(isset($_SESSION["message"])){
            //On affiche le message dans une alert Bootsrap
            echo ' <div class="alert alert-success">'.$_SESSION["message"].'</div>';
            //Et surtout on supprime le message de la session car il a été diffusé
            unset($_SESSION["message"]);
        };
        ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Icone</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Texte</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //1 - Connexion
                require_once('../core/connexion.php');
                //2 - Ecriture de la requête
                $sql = 'SELECT * FROM about';
                //3 - Execution de la requête
                $req = mysqli_query($connexion, $sql) or die(mysqli_error($connexion));
                //4 - Traitement des données 
                while($bloc = mysqli_fetch_array($req)){
                ?>
                <tr>
                    <th scope="row"><?php echo $bloc['id'];?></th>
                    <td><i class="fa <?php echo $bloc['icone'];?>"></i></td>
                    <td><?php echo $bloc['titre'];?></td>
                    <td><?php echo $bloc['text'];?></td>
                    <td>
                        <div class="d-flex">
                            <a href="../core/delete-about.php?id=<?php echo $bloc['id'];?>" class="btn btn-danger mr-2" onclick="return confirm ('Vraiment ?')"><i class="fa fa-trash"></i></a>
                            <a href="edit-about.php?id=<?php echo $bloc['id'];?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
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