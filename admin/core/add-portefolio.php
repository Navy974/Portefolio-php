<?php 
session_start();
require_once('../core/connexion.php');
$titre = addslashes($_POST['titre']);
$texte = addslashes($_POST['texte']);
$sql = 'INSERT INTO portefolio (titre, texte) VALUES("'.$titre.'","'.$texte.'")'; 
mysqli_query($connexion, $sql) or die(mysqli_error($connexion));
$_SESSION['message'] = "Ajout correctement effectuée.";
header('Location: ../index-portefolio.php');