<?php
session_start ();
include 'libraries/User.class.php';
include 'libraries/Alert.class.php';
include 'libraries/Template.class.php';
?>
<!DOCTYPE html>
<html lang="en-gb" dir="ltr" class="uk-height-1-1">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Connexion Administration Soif2Rennes</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon-precomposed"
	href="images/apple-touch-icon.png">
<link rel="stylesheet" href="css/uikit.gradient.min.css">
<link rel="stylesheet" href="css/components/notify.gradient.min.css">
<script src="vendor/jquery.min.js"></script>
<script src="js/uikit.min.js"></script>
<script type="text/javascript" src="js/components/notify.min.js"></script>
</head>

<body class="uk-height-1-1">
	<?php
	$content_html = new Template ();
	$content_html->displayConnexionScreen ();
	
	if (isset ( $_POST ["connexion"] )) {
		if (! empty ( $_POST ['username'] ) && ! empty ( $_POST ['password'] )) {
			$username = htmlspecialchars ( $_POST ['username'] );
			$password = htmlspecialchars ( $_POST ['password'] );
			$action = new User ();
			$passwordFromDB = $action::getPassword ( $username );
			$id = $action::getIdUser ( $username );
			if (password_verify ( $password, $passwordFromDB )) {
				$alert = new Alert ();
				echo $alert->displayConnexionSuccess ();
				$_SESSION ['id'] = $id;
				$_SESSION ['access'] = $action::getAccess ( $username );
				$action = new User ();
				$_SESSION ['username'] = $action->getUsername ( $_SESSION ['id'] );
				header ( 'Refresh: 1;url=admin.php' );
			} else {
				$alert = new Alert ();
				echo $alert->displayConnexionError ();
			}
		} else {
			$alert = new Alert ();
			echo $alert->displayConnexionError ();
		}
	}
	?>
</body>
</html>