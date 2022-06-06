<?php 
//On démarre une session pour pouvoir stocker des informations qui perdurent malgré la navigation et 
// qui seront accessible  dans toutes les pages auyant acces à la session (l'accés n'est pas implicite)
session_start();
// 1 - Connexion
require_once('../core/connexion.php');
// 2 - Ecriture de la requête
$sql = 'DELETE FROM formation WHERE id=' .$_GET['id'];
// 3 - Execution de la requête 
mysqli_query($connexion, $sql) or die(mysqli_error($connexion));
// Mise en place d'un message dans la session à l'aide de $_SESSION (super variable accessible parce qu'il y a eu session start dans la page)
$_SESSION['message'] = "Suppression correctement effectuée.";

// Redirection vers la liste des abouts
header('Location: ../index-formation.php');