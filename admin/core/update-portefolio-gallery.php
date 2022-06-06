<?php 
//On démarre une session pour pouvoir stocker des informations qui perdurent malgré la navigation et 
// qui seront accessible  dans toutes les pages auyant acces à la session (l'accés n'est pas implicite)
session_start();
// 1 - Connexion
require_once('connexion.php');
// 2- Ecriture de requête 
// Analyse si une image a été chargée dans le formulaire
if(!empty($_FILES['image']['name'])){
    // On supprime la photo actuelle 
    if(file_exists('../images/'.$_POST['current-photo']))
    unlink('../images/'.$_POST['current-photo']);
    // Création d'un nom d'image et transfert de fichier depuis le répertoire temporaire du serveur vers le dossier images du site 
    $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $filename = "carousel_".uniqid().'.'.$ext;
    move_uploaded_file($_FILES['image']['tmp_name'], '../images/'.$filename);
}else{
    $filename = $_POST['current-photo'];
}
$sql = 'UPDATE portefolio_gallery SET photo = WHERE id='.$_POST['id'];
mysqli_query($connexion, $sql) or die(mysqli_error($connexion));

$_SESSION['message'] = "Mise à jour correctement ok.";

// Redirection vers la liste des abouts
header('Location: ../admin/index-carousel.php');