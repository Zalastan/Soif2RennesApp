<?php
/**
 * @package   AppSoif2Rennes
 * @author   Sébastien Gamarde, Victor Auberger
 * @copyright Copyright (C) Sébastien Gamarde
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
 */
// A CHANGER CHAQUE ANNEE //
$annee = '2015';
/* include "functions-erik.php"; */
session_start ();
include 'libraries/DBFactory.php';
include 'libraries/BarsList.class.php';
include 'libraries/Template.class.php';

?>
<!DOCTYPE html>
<html lang="fr-FR" dir="ltr" class="uk-height-1-1">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Connexion Administration Soif2Rennes</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon-precomposed"
	href="images/apple-touch-icon.png">
<link rel="stylesheet" href="css/uikit.gradient.min.css">
<script src="vendor/jquery.min.js"></script>
<script src="js/uikit.min.js"></script>
</head>
<body class="uk-height-1-1">
	<div
		class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">

<?php
$content_html = new Template ();
$content_html::displayNav ();
$content_html::displayaddEventForm ();
if (isset ( $_POST ["Envoyer"] )) {
	
	if (! empty ( $_POST ['titre'] ) and ! empty ( $_POST ['jour'] ) and ! empty ( $_POST ['mois'] ) and ! empty ( $_POST ['heure'] ) and ! empty ( $_POST ['id_bar'] ) and ! empty ( $_POST ['icone'] ) and ! empty ( $_POST ['minute'] ) and $_POST ['minute'] < 60 and $_POST ['jour'] < 32 and $_POST ['mois'] < 13) {
		if (is_numeric ( $_POST ['jour'] ) and is_numeric ( $_POST ['mois'] ) and is_numeric ( $_POST ['heure'] ) and is_numeric ( $_POST ['minute'] )) {
			// Variables
			$titre = mysql_real_escape_string ( htmlspecialchars ( stripcslashes ( $_POST ["titre"] ) ) );
			if (empty ( $_POST ['style'] ))
				$style = '';
			else
				$style = $_POST ['style'];
			$jour = ($_POST ["jour"]);
			if (strlen ( $jour ) < 2)
				$jour = "0" . $jour;
			$mois = ($_POST ["mois"]);
			if (strlen ( $mois ) < 2) {
				$mois = "0" . $mois;
			}
			$date = $jour . '-' . $mois . '-' . $annee;
			$datetime = $annee . $mois . $jour;
			$heure = ($_POST ["heure"]);
			$minute = ($_POST ["minute"]);
			$horaire = ($_POST ['heure'] . 'h' . $_POST ['minute']);
			if (! empty ( $_POST ['heurefin'] ))
				$horairefin = ($_POST ['heurefin'] . 'h' . $_POST ['minutefin']);
			else
				$horairefin = "vide";
			$icone = ($_POST ["icone"]);
			if (empty ( $_POST ["prix"] ))
				$prix = "Gratuit";
			else if (is_numeric ( $_POST ['prix'] ))
				$prix = $_POST ['prix'] . ' &euro;';
			else
				$prix = $_POST ['prix'];
			$id_bar = $_POST ["id_bar"];
			$details = stripcslashes ( $_POST ["details"] );
			$details = mysql_real_escape_string ( htmlspecialchars ( nl2br ( $details ) ) );
			$nombar = "";
			
			// Teste si 'autre etalissement" est bien selectionné quand le champ "autre" et rempli
			if (! empty ( $_POST ['autre-nom'] ) and $_POST ['id_bar'] != '56') {
				echo "<SCRIPT type=\"text/javascript\"> 
				alert(\"Selectionner AUTRE\");
				</SCRIPT>";
				unset ( $_POST ['id_bar'] );
			}
			
			// Si "autre" selectionné, alors on recup le nom du bar en dur
			if ($_POST ['id_bar'] == '56') {
				$nombar = $_POST ['autre-nom'];
			}
			if (empty ( $_POST ['lien1'] ))
				$lien1 = '';
			else
				$lien1 = $_POST ['lien1'];
			if (empty ( $_POST ['lien2'] ))
				$lien2 = '';
			else
				$lien2 = $_POST ['lien2'];
			
			if (empty ( $_POST ['flyer1'] ))
				$flyer1 = '';
			else
				$flyer1 = $_POST ['flyer1'];
			if (empty ( $_POST ['flyer2'] ))
				$flyer2 = '';
			else
				$flyer2 = $_POST ['flyer2'];
			if (empty ( $_POST ['video1'] ))
				$video1 = '';
			else if (strpos ( $_POST ['video1'], "watch?v=" ) == "") {
				$videoid1 = explode ( 'watch?feature=player_embedded&v=', $_POST ['video1'] );
				$video1 = '<iframe class=\"aligncenter\" width=\"550\" height=\"413" src=\"http://www.youtube.com/embed/' . $videoid1 [1] . '\"/> frameborder="0" allowfullscreen></iframe>';
			} else {
				$videoid1 = explode ( 'watch?v=', $_POST ['video1'] );
				$video1 = '<iframe width=\"380\" height=\"214\" src=\"http://www.youtube.com/embed/' . $videoid1 [1] . '\"/> frameborder="0" allowfullscreen></iframe>';
			}
			if (empty ( $_POST ['video2'] ))
				$video2 = '';
			else if (strpos ( $_POST ['video2'], "watch?v=" ) == "") {
				$videoid2 = explode ( 'watch?feature=player_embedded&v=', $_POST ['video2'] );
				$video2 = '<iframe class=\"aligncenter\" width=\"550\" height=\"413" src=\"http://www.youtube.com/embed/' . $videoid2 [1] . '\"/> frameborder="0" allowfullscreen></iframe>';
			} else {
				$videoid2 = explode ( 'watch?v=', $_POST ['video2'] );
				$video2 = '<iframe width=\"380\" height=\"214\" src=\"http://www.youtube.com/embed/' . $videoid2 [1] . '\"/> frameborder="0" allowfullscreen></iframe>';
			}
			
			// Connexion + insertion BDD
			
			mysql_select_db ( "soifrenns2r" );
			$query = mysql_query ( "INSERT INTO module_cms VALUES('', '" . $titre . "', '" . $style . "', '" . $date . "', '" . $horaire . "', '" . $horairefin . "', '" . $prix . "', '" . $id_bar . "', '" . $nombar . "', '" . $icone . "', '" . $details . "', '" . $lien1 . "', '" . $lien2 . "', '" . $flyer1 . "', '" . $flyer2 . "', '" . $video1 . "', '" . $video2 . "', '" . $datetime . "')" );
			if (! $query) {
				die ( 'Requete invalide : ' . mysql_error () );
			}
			mysql_close ( $connex );
			echo '<br/><br/><br/>Enregistrement pour [ ' . $_POST ['titre'] . '] effectue';
			echo "<SCRIPT type=\"text/javascript\"> 
				alert(\"Enregistrement effectue\");
				</SCRIPT>";
		} else
			echo "<SCRIPT type=\"text/javascript\"> 
	alert(\"Les dates sont des chiffres\");
	</SCRIPT>;";
	} else
		echo "<SCRIPT type=\"text/javascript\"> 
alert(\"Donnee manquante\");
</SCRIPT>";
}

?>
</div>
</body>
</html>