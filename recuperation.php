<?php 

// $calendrier=file_get_contents("https://www.googleapis.com/calendar/v3/calendars/simplon.co_7sc0sp073u3svukpopmhob9fmg%40group.calendar.google.com/events?key=AIzaSyADm7UvQFnHmkfo_sei1oZoLvx_X-_mhFI")

// //Expression régulières
// $regExpMatch='SUMMARY:(.*)';
// $regExpDate='DTSTART:(.*)';
// $regExpDesc='DESCRITPION:(.*)';

// $n = preg_match_all($regExpMatch, $calendrier, $matchTableau, PREG_PATTERN_ORDER);
// 	preg_match_all($regExpDate, $calendrier, $dateTableau, PREG_PATTERN_ORDER);
// 	preg_match_all($regExpDesc, $calendrier, $descTableau, PREG_PATTERN_ORDER);

// for ($j=0; $j < $n; $j++) { 
// 	//Récupération des données
// 	$annee = substr($dateTableau[0][$j], 8, 4);
// 	$mois = substr($dateTableau[0][$j], 12, 2);
// 	$jour = substr($dateTableau[0][$j], 14, 2);
// 	$heure = substr($dateTableau[0][$j], 17, 2);
// 	$min = substr($dateTableau[0][$j], 19, 2);
// 	$match = substr($matchTableau[0][$j], 8);
// 	$desc = substr($descTableau[0][$j], 12);

// 	//Mise en forme
// $date = $jour . '/' . $mois . '/' . $annee;
// $horaire = $heure . '/' . $min;
// list($compet,$rang,$tv) = explode('-', $desc);

// //Affichage
// echo $rang.$compet.$date.$horaire.$match.$tv;
// }

?>

<!DOCTYPE html>
<html>
<head>
	<title>recuperation</title>
</head>
<body onload="loadJSON()">
	<script type="text/javascript">
		/* CHARGEMENT Texte contenant données structurées : liste de users JSON
         * le navigateur sait analyser le JSON et le transformer en objet JS plus simples à manipuler
         * */
        function loadJSON() {
            requete = new XMLHttpRequest();
            // au chargement on affiche le texte reçu ds la console et sur la page
            requete.onload = onJSON;
            //requete.onerror = onError;
            requete.open('get', 'users.json', true);
            requete.send();
        }
        function onJSON(e) {
            // console.log('onDataText', this.responseText);
            var users = JSON.parse(this.responseText);
            console.log(users.items[0]);
            for (var i=0; i<users.items.length; i++){
            var eventTitle = users.items[i].summary;
            var eventStart = users.items[i].start.dateTime;
            var eventEnd = users.items[i].end.dateTime;
            var eventEmail = users.items[i].creator.email;
            var li = document.createElement('li');
            li.innerHTML = eventTitle + " " + eventStart + " " + eventEnd + " " + eventEmail;
        }}
        
	</script>

</body>
</html>