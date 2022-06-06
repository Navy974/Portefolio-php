<?php 
//On démarre une session pour pouvoir stocker des informations qui perdurent malgré la navigation et 
// qui seront accessible  dans toutes les pages auyant acces à la session (l'accés n'est pas implicite)
session_start();
// 1 - Connexion
require_once('../core/connexion.php');
// 2- Ecriture de requête 
// addslashes échappent (\) les guillemets simples ou doubles se trouvent dans le contenu 
// $_POST est une super (globale) variable qui sert à récupérer les données du formulaire puisque celui-ci est en 
// méthode POST. Les noms dans les crochets correspondent aux attributs name des inputs du formulaire 
$titre = addslashes($_POST['titre']);
$texte = addslashes($_POST['texte']);
$sql = 'UPDATE formation SET titre="'.$titre.'", texte="'.$texte.'" WHERE id='.$_POST["form-id"];
// 3 - Execution de la requête 
mysqli_query($connexion, $sql) or die(mysqli_error($connexion));
// Mise en place d'un message dans la session à l'aide de $_SESSION (super variable accessible parce qu'il y a eu session start dans la page)
$_SESSION['message'] = "Mise à jour correctement effectuée.";

// Redirection vers la liste des abouts
header('Location: ../index-formation.php');