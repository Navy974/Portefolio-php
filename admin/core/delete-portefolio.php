<?php 
//On démarre une session pour pouvoir stocker des informations qui perdurent malgré la navigation et 
// qui seront accessible  dans toutes les pages auyant acces à la session (l'accés n'est pas implicite)
session_start();
require_once('../core/connexion.php');
$sql = 'DELETE FROM portefolio WHERE id=' .$_GET['id'];
mysqli_query($connexion, $sql) or die(mysqli_error($connexion));
$_SESSION['message'] = "Suppression correctement effectuée.";
header('Location: ../index-portefolio.php');