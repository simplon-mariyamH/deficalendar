<!DOCTYPE html>
<html>
<head>
	<title>Google Claendar</title>
</head>
<body>
	<form method="post" action="cibledeficalendriergoogle.php">
		<h2>Ajouter un événement à votre calendrier Google</h2>
		<p>Titre <input type="text" name="titre"></p>
		<p>Debut <input type="date" name="debut"></p>
		<p>Fin <input type="date" name="fin"></p>
		<p>E-mail <input type="email" name="mail_createur"></p>
		<p><input type="submit" name="ajouter" value="Ajouter"></p>
		</form>
		<form method="post" action="cibleafficher.php">
		<p><input type="submit" name="afficher" value="Afficher"></p>
	</form>
</body>
</html>
