<?php
session_start();
// 1 - Connexion
require_once('./connexion.php');
// Récupération des infos actuelles
$sql = "SELECT photo FROM portefolio_gallery WHERE id=".$_GET['id'];
$req = mysqli_query($connexion, $sql) or die(mysqli_error($connexion));
$carousel = mysqli_fetch_array($req);
// Suppression du fichier image
if(file_exists('../images/' .$carousel['photo'])) unlink('../images/' .$carousel['photo']);
// 2 - Ecriture de la requête
$sql = 'DELETE FROM portefolio_gallery WHERE id=' .$_GET['id'];
// 3 - Execution de la requête 
mysqli_query($connexion, $sql) or die(mysqli_error($connexion));
// Mise en place d'un message dans la session à l'aide de $_SESSION (super variable accessible parce qu'il y a eu session start dans la page)
$_SESSION['message'] = "Suppression correctement effectuée.";
// Redirection vers la liste des abouts
header('Location: ../admin/index-portefolio-gallery.php');