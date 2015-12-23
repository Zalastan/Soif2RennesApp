<?php
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
// Afficher les erreurs et les avertissements
ini_set('error_reporting', E_ALL);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Téléchargement de la suite adobe</title>

<!-- Bootstrap -->
<link href="/css/uikit.min.css" rel="stylesheet">
<script src="js/uikit.min.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="icon" type="image/png" href="/favicon.png" />
<title>INSERTION</title>
</head>
 <?php
	// A CHANGER CHAQUE ANNEE //
	$annee = '2015';
	
	/*include "functions-erik.php";*/
	include'libraries/DBFactory.php';
	?>

<?php
$connexion = new DBFactory();
$connexion->getMysqlConnexionWithMySQLi();
?>

<body style="background-color: #CCCCCC;">
	<form name="form" action="insertion.php" method="post" class="uk-form">
		Titre : <input class="uk-row" type="text" name="titre" size="100px"
			value='<?php if (!empty($_POST['titre'])) echo mysql_real_escape_string(htmlspecialchars(stripcslashes($_POST['titre']))); ?>' />
		Style : <input type="text" name="style" size="50px"
			value='<?php if (!empty($_POST['style'])) echo mysql_real_escape_string(htmlspecialchars(stripcslashes($_POST['style']))); ?>' /><br />
		<br /> Jour : <input type="text" name="jour" maxlength="2" size="5px"
			value='<?php if (!empty($_POST['jour'])) echo $_POST['jour']; ?>' />
		Mois : <input type="text" name="mois" maxlength="2" size="5px"
			value='<?php if (!empty($_POST['mois'])) echo $_POST['mois']; ?>' />
		<br /> <br /> Heure : <input type="text" name="heure" maxlength="2"
			size="5px"
			value='<?php if (!empty($_POST['heure'])) echo $_POST['heure']; ?>' />
		h <input type="text" name="minute" maxlength="2" size="5px"
			value='<?php if (!empty($_POST['minute'])) echo $_POST['minute']; else echo "00"; ?>' />
		&agrave; <input type="text" name="heurefin" maxlength="2" size="5px"
			value='<?php if (!empty($_POST['heurefin'])) echo $_POST['heurefin']; ?>' />h
		<input type="text" name="minutefin" maxlength="2" size="5px"
			value='<?php if (!empty($_POST['minutefin'])) echo $_POST['minutefin']; else echo "00" ?>' />
		<br /> <br /> Prix : <input type="text" name="prix" size="15px"
			value="<?php if (!empty($_POST['prix'])) echo $_POST['prix'];?>" />&euro;



		<br /> <br />Etablissement : <select name="id_bar">
			<option value="1"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "1") echo 'selected="selected" '; ?>>Antipode</option>


			<option value="2"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "2") echo 'selected="selected" '; ?>>UBU</option>


			<option value="3"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "3") echo 'selected="selected" '; ?>>Jardin
				Moderne</option>


			<option value="4"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "4") echo 'selected="selected" '; ?>>Libert&eacute;</option>


			<option value="5"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "5") echo 'selected="selected" '; ?>>Salle
				de la Cit&eacute;</option>


			<option value="6"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "6") echo 'selected="selected" '; ?>>Foyer
				de l'INSA</option>


			<option value="7"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "7") echo 'selected="selected" '; ?>>&Eacute;tage</option>


			<option value="8"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "8") echo 'selected="selected" '; ?>>&Eacute;laboratoire</option>

			<option value="9"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "9") echo 'selected="selected" '; ?>>Theatre
				elabo</option>

			<option value="10"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "10") echo 'selected="selected" '; ?>>1675</option>

			<option value="11"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "11") echo 'selected="selected" '; ?>>Domaines
				qui montent</option>

			<option value="12"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "12") echo 'selected="selected" '; ?>>LiveClub</option>

			<option value="13"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "13") echo 'selected="selected" '; ?>>Grand
				Sommeil</option>

			<option value="14"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "14") echo 'selected="selected" '; ?>>Cafe
				des Champs Libres</option>

			<option value="15"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "15") echo 'selected="selected" '; ?>>Institut
				FrancoAmericain</option>


			<option value="16"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "16") echo 'selected="selected" '; ?>>P&eacute;niche
				Sp&eacute;ctacle</option>


			<option value="17"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "17") echo 'selected="selected" '; ?>>Diapason</option>

			<option value="18"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "18") echo 'selected="selected" '; ?>>Opera</option>

			<option value="19"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "19") echo 'selected="selected" '; ?>>Moon
				Station</option>

			<option value="20"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "20") echo 'selected="selected" '; ?>>Extaz</option>

			<option value="21"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "21") echo 'selected="selected" '; ?>>Tambour</option>


			<option value="22"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "22") echo 'selected="selected" '; ?>>Triangle</option>


			<option value="23"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "23") echo 'selected="selected" '; ?>>Atelier
				du vent</option>


			<option value="24"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "24") echo 'selected="selected" '; ?>>4Bis</option>


			<option value="25"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "25") echo 'selected="selected" '; ?>>Cubanacan</option>

			<option value="26"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "26") echo 'selected="selected" '; ?>>Ty
				Anna tavarn</option>

			<option value="27"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "27") echo 'selected="selected" '; ?>>Champs
				Libres</option>


			<option value="28"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "28") echo 'selected="selected" '; ?>>Combi
				bar</option>


			<option value="29"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "29") echo 'selected="selected" '; ?>>Bar'hic</option>


			<option value="30"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "30") echo 'selected="selected" '; ?>>Melody
				maker</option>


			<option value="31"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "31") echo 'selected="selected" '; ?>>Mondo
				Bizarro</option>


			<option value="32"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "32") echo 'selected="selected" '; ?>>Gazoline</option>


			<option value="33"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "33") echo 'selected="selected" '; ?>>Terminus</option>

			<option value="34"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "34") echo 'selected="selected" '; ?>>Before
				bar</option>

			<option value="35"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "35") echo 'selected="selected" '; ?>>Ramon
				et Pedro</option>

			<option value="36"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "36") echo 'selected="selected" '; ?>>Cooperative</option>


			<option value="37"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "37") echo 'selected="selected" '; ?>>O'retroviseur</option>


			<option value="38"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "38") echo 'selected="selected" '; ?>>Plomberie
				du canal</option>


			<option value="39"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "39") echo 'selected="selected" '; ?>>Bistrot
				de la cit&eacute;</option>


			<option value="40"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "40") echo 'selected="selected" '; ?>>Chantier</option>


			<option value="41"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "41") echo 'selected="selected" '; ?>>Waxx
				Cafe</option>


			<option value="42"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "42") echo 'selected="selected" '; ?>>Alex
				Tavern</option>


			<option value="43"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "43") echo 'selected="selected" '; ?>>Bascule</option>


			<option value="44"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "44") echo 'selected="selected" '; ?>>Artiste
				assoif&eacute;</option>


			<option value="45"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "45") echo 'selected="selected" '; ?>>Lavomatique
				cour Kennedy</option>


			<option value="46"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "46") echo 'selected="selected" '; ?>>Quincaillerie
				g&eacute;n&eacute;rale</option>


			<option value="47"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "47") echo 'selected="selected" '; ?>>Sablier</option>


			<option value="48"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "48") echo 'selected="selected" '; ?>>Aeternam</option>


			<option value="49"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "49") echo 'selected="selected" '; ?>>Bar
				du champ Jacquet</option>


			<option value="50"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "50") echo 'selected="selected" '; ?>>Backstage</option>


			<option value="51"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "51") echo 'selected="selected" '; ?>>Sympatic</option>


			<option value="52"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "52") echo 'selected="selected" '; ?>>Oan's
				pub</option>


			<option value="53"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "53") echo 'selected="selected" '; ?>>Espace</option>


			<option value="54"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "54") echo 'selected="selected" '; ?>>Pym's</option>

			<option value="55"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "55") echo 'selected="selected" '; ?>>Secret
				dans Rennes</option>


			<option value="56"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "56") echo 'selected="selected" '; ?>>Autre</option>

			<option value="57"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "57") echo 'selected="selected" '; ?>>Musikhall</option>

			<option value="58"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "58") echo 'selected="selected" '; ?>>Scaramouche</option>

			<option value="59"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "59") echo 'selected="selected" '; ?>>Bréquigny</option>

			<option value="60"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "60") echo 'selected="selected" '; ?>>Contrescarpe</option>

			<option value="61"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "61") echo 'selected="selected" '; ?>>Dejazey</option>

			<option value="62"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "62") echo 'selected="selected" '; ?>>BaronClub</option>

			<option value="63"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "63") echo 'selected="selected" '; ?>>Trinquette</option>

			<option value="64"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "64") echo 'selected="selected" '; ?>>Cour
				des Miracles</option>

			<option value="65"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "65") echo 'selected="selected" '; ?>>Papier
				Timbré</option>

			<option value="66"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "66") echo 'selected="selected" '; ?>>Bonne
				Nouvelle</option>

			<option value="67"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "67") echo 'selected="selected" '; ?>>Teatro</option>

			<option value="68"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "68") echo 'selected="selected" '; ?>>Cave
				de l'opera</option>

			<option value="69"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "69") echo 'selected="selected" '; ?>>Avant
				Scene</option>

			<option value="70"
				<?php if (!empty ($_POST['id_bar']) AND $_POST['id_bar'] == "70") echo 'selected="selected" '; ?>>Comptoir</option>

		</select><br /> <br /> <br /> Nom de l'etablissement si pas dans la
		liste : <input type="text" name="autre-nom"
			value="<?php if (!empty($_POST['autre-nom'])) echo $_POST['autre-nom'];?>" />
		<br /> <br /> Icone : <select name="icone">
			<option
				value="src='http://soif2rennes.fr/wp-content/uploads/2013/02/icone-rock.png'"
				<?php if (!empty ($_POST['icone']) AND htmlspecialchars(stripcslashes($_POST['icone']) == "src='http://soif2rennes.fr/wp-content/uploads/2013/02/icone-rock.png'")) echo 'selected="selected" '; ?>>Rock</option>
			<option
				value="src='http://soif2rennes.fr/wp-content/uploads/2013/02/icone-platine.png'"
				<?php if (!empty ($_POST['icone']) AND htmlspecialchars(stripcslashes($_POST['icone']) == "src='http://soif2rennes.fr/wp-content/uploads/2013/02/icone-platine.png'")) echo 'selected="selected" '; ?>>Platine</option>
			<option
				value="src='http://soif2rennes.fr/wp-content/uploads/2013/02/icone-guitare.png'"
				<?php if (!empty ($_POST['icone']) AND htmlspecialchars(stripcslashes($_POST['icone']) == "src='http://soif2rennes.fr/wp-content/uploads/2013/02/icone-guitare.png'")) echo 'selected="selected" '; ?>>Guitare</option>
			<option
				value="src='http://soif2rennes.fr/wp-content/uploads/2013/02/icone-teuf.png'"
				<?php if (!empty ($_POST['icone']) AND htmlspecialchars(stripcslashes($_POST['icone']) == "src='http://soif2rennes.fr/wp-content/uploads/2013/02/icone-teuf.png'")) echo 'selected="selected" '; ?>>Teuf</option>
			<option
				value="src='http://soif2rennes.fr/wp-content/uploads/2013/02/icone-spectacle.png'"
				<?php if (!empty ($_POST['icone']) AND htmlspecialchars(stripcslashes($_POST['icone']) == "src='http://soif2rennes.fr/wp-content/uploads/2013/02/icone-spectacle.png'")) echo 'selected="selected" '; ?>>Spectacle</option>
			<option
				value="src='http://soif2rennes.fr/wp-content/uploads/2013/02/icone-micro.png'"
				<?php if (!empty ($_POST['icone']) AND htmlspecialchars(stripcslashes($_POST['icone']) == "src='http://soif2rennes.fr/wp-content/uploads/2013/02/icone-micro.png'")) echo 'selected="selected" '; ?>>Micro</option>
			<option
				value="src='http://soif2rennes.fr/wp-content/uploads/2013/02/icone-autre.png'"
				<?php if (!empty ($_POST['icone']) AND htmlspecialchars(stripcslashes($_POST['icone']) == "src='http://soif2rennes.fr/wp-content/uploads/2013/02/icone-autre.png'")) echo 'selected="selected" '; ?>>Autre</option>
		</select> <br /> <br /> <br /> <br /> Details :<br />
		<textarea name="details" cols="70" rows="8"><?php if (!empty($_POST['details'])) echo $_POST['details']; ?></textarea>
		<br /> <br /> Lien 1 : <input type="text" name="lien1" size="80px"
			value="<?php if (!empty($_POST['lien1'])) echo $_POST['lien1'];?>" /><br />
		<br /> Lien 2 : <input type="text" name="lien2" size="80px"
			value="<?php if (!empty($_POST['lien2'])) echo $_POST['lien2'];?>" /><br />
		<br /> Flyer : <input type="text" name="flyer1" size="80px"
			value="<?php if (!empty($_POST['flyer1'])) echo $_POST['flyer1'];?>" /><br />
		<br /> Flyer 2 : <input type="text" name="flyer2" size="80px"
			value="<?php if (!empty($_POST['flyer2'])) echo $_POST['flyer2'];?>" /><br />
		<br /> Video : <input type="text" name="video1" size="80px"
			value="<?php if (!empty($_POST['video1'])) echo $_POST['video1'];?>" /><br />
		<br /> Video 2 : <input type="text" name="video2" size="80px"
			value="<?php if (!empty($_POST['video2'])) echo $_POST['video2'];?>" /><br />
		<br /> <input type="submit" name="Envoyer" /><br /> <br /> <br />
	</form>
	<br />
	<a href="affichage.php">Aller vers la page d'affichage</a>



<?php

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
</body>
</body>
</html>