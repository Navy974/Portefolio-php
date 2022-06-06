<?php 

session_start();
// 1 - connexion
require_once('../core/connexion.php');
// 2 - Prise en charge de l'image
// Récupération de l'extension de l'image
$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
//On renomme l'image pour qu'il n'y ai pas de doublons de noms et qu'une image
// n'en remplace pas une autre 
$carousel = "carousel_".uniqid().'.'.$ext;

// On déplace l'image du dossier temporaire du serveur vers le dossier image du site 
move_uploaded_file($_FILES['image']['tmp_name'],".../images".$carousel);
//
$sql = 'INSERT INTO portefolio_gallery (photo) VALUES ("'.$carousel.'")';
//
mysqli_query($connexion, $sql) or die(mysqli_error($connexion));
//
$_SESSION["message"] = "Carousel ajouté dans la base de données";
header("Location: ../index-portefolio.php");
