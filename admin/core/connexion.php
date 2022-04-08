<?php 
// On declare un flag (boolean) pour savoir quel jeu de données de connexion on utilise 
$online = false;
//
if(!$online){
    $host = "localhost"; // Le nom du serveur local (émulateur)
    $user = "root";
    $password = "root";
    $bdd = "portfolio";
}else{
    // Les informations fournies par l'hébergeur
    $host = "";
    $user = "";
    $password = "";
    $bdd= "";
}
//Mise en place la connexion au serveur et à la base de données
$connexion = mysqli_connect($host, $user, $password, $bdd) or die("Erreur de connexion au serveur");
// On précise que l'encodage des requêtes est en UTF8 
mysqli_query($connexion, "SET NAMES 'utf8'");