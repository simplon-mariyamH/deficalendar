<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php  
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=calendrier_google;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

if ((isset($_POST['titre']) AND $_POST['titre']!=='') 
	AND (isset($_POST['debut']) AND $_POST['debut']!=='') 
	AND (isset($_POST['fin']) AND $_POST['fin']!=='') 
	AND (isset($_POST['mail_createur']) AND $_POST['mail_createur']!=='')) 
{
$titre = $_POST['titre'];
$debut = $_POST['debut'];
$fin = $_POST['fin'];
$mail_createur = $_POST['mail_createur'];

$req = $bdd->prepare('INSERT INTO calendar_data(titre, debut, fin, mail_createur) VALUES(?, ?, ?, ?)');
$req->execute(array(
    $titre,
    $debut,
    $fin,
    $mail_createur,
    ));

echo 'L\'événement a bien été ajouté !';?>
		<p><a href="deficalendriergoogle.php">Retour</a></p><?php

} else {
	echo 'vous n\'avez pas renseigner tous les champs, veuillez saisir tous les champs, merci.';?>
		<p><a href="deficalendriergoogle.php">Retour</a></p><?php
}

?>
</body>
</html>