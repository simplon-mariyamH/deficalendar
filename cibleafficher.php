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

$affichage = $bdd->query('SELECT titre, debut, fin, mail_createur FROM calendar_data ORDER BY debut');

while ($donnees = $affichage->fetch()) {
	echo 'événement créer : ' . $donnees['titre'] . ' débutant le ' . $donnees['debut'] . ' et se finissant le ' . $donnees['fin'] . ' enregistré à l\'adresse mail suivante : ' . $donnees['mail_createur'] . '<br /><br />';
}

$affichage -> closeCursor();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Affichage des événements</title>
</head>
<body>

		<p><a href="deficalendriergoogle.php">Retour</a></p>
		<p><a href="recuperation.php">Lien vers les événements du calendrier Google de Simplon</a></p>
</body>
</html>