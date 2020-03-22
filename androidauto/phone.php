<!DOCTYPE html>
<html>
	<head>
		<title>Android Auto - Téléphone</title>
		<link rel="stylesheet" href="framework/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="style.css">
		<script src="framework/forHome/jquery.min.js"></script>
		<script src="framework/forHome/popper.min.js"></script>
		<script src="framework/forHome/bootstrap.min.js"></script>
	</head>
	
	<script>
		function OffLine(){
			var msg = "Android Auto nécessite une connexion Internet pour fonctionner corectement\nMerci de vous connecter à Internet.";
			 console.log(msg)
			 alert(msg);
		}
		
		// Fonction pour les notification windows
		/*Notification.requestPermission( function(status) {
			console.log(status); // les notifications ne seront affichées que si "autorisées"
			var n = new Notification("Android Auto", {body: "Android Auto démarré"}); // this also shows the notification
		});*/
		
		function transition(){
			document.getElementById('didier').style.display="block";
		}
		
	</script>
	
	<!-- Session PHP -->
	<?php
		session_start();
		
		if ($_SESSION['theme'] == 'white') {
			
			$iconeHome = 'img/icon/home-dark.png';
		}else {
			$iconeHome = 'img/icon/home-light.png';
		}
	?>
	
	<body class="phoneOverlay container-fluid" onload="setTimeout('transition()',2000);" onoffline="OffLine()" style="background-color:<?php echo $_SESSION['theme'];?>; color: <?php echo $_SESSION['themefont'];?>;">
		
		<!-- header -->
		<header>
			<div class="darkmodebox" onclick="document.location='darkmode.php'" style="background-color:<?php echo $_SESSION['theme'];?>; color: <?php echo $_SESSION['themefont'];?>;">
				<center><h1>☼</h1></center>
			</div>
			<?php
				include 'header.php';
			?>
		</header>
		
		<!-- PHP pour la séléction du menu -->
		<?php
			// Déclarations des variables
			if( ! isset( $_POST['compose'] ) ) $_POST['compose'] = 0;
			if( ! isset( $_POST['repertoire'] ) ) $_POST['repertoire'] = 0;
			if( ! isset( $_POST['journal'] ) ) $_POST['journal'] = 0;
			
			$theme = $_SESSION['theme'];
			
			$compose = $_POST['compose'];
			$repertoire = $_POST['repertoire'];
			$journal = $_POST['journal'];
			
			$styleCompose = 'border-right: 2px solid #00ffff; border-top: 2px solid #00ffff;';
			$styleRepertoire = 'border-right: 2px solid #00ffff; border-top: 2px solid #00ffff;';
			$styleJournal = 'border-top: 2px solid #00ffff;';
			
			// Selection des sous menu
			if ($repertoire == 1){ // Selection de Répertoire
				
				$styleRepertoire ='border-top: none; border-right: 2px solid #00ffff; background: linear-gradient('.$theme.', 90%, #00ffff);';
				
				include ('vues/phone/phone-repertoire.php');
				
			} elseif ($journal == 1){ // Selection de Journal
				
				$styleJournal = 'border-top: none; background: linear-gradient('.$theme.', 90%, #00ffff);';
				
				include ('vues/phone/phone-journal.php');
				
			} else { // Selection par défaut 
				
				$styleCompose = 'border-top: none; border-right: 2px solid #00ffff; background: linear-gradient('.$theme.', 90%, #00ffff);';
				
				include ('vues/phone/phone-compose.php');
			}
			
		?>
		
		<!-- Footer des menus -->
		<footer class="footerPhone">
			<div class="row">
				<div class="col-auto" style="border-right: 2px solid #00ffff; width: 10%; border-top: 2px solid #00ffff;" onclick="document.location='../androidauto/home.php'">
					<center>
						<img src="<?php echo $iconeHome; ?>" class="img-fluid" style="width: 70px;">
					</center>
				</div>
				<div class="col" style="<?php echo $styleCompose; ?>" onclick="window.document.formcompose.submit();">
					<!-- Envois des données au formulaire + ràz -->
					<form method="post" name="formcompose">
						<input type="hidden" value="1" name="compose"></input> 
						<input type="hidden" value="0" name="repertoire"></input> 
						<input type="hidden" value="0" name="journal"></input> 
					</form>
					
					<h1>Composer</h1>
				</div>
				<div class="col" style="<?php echo $styleRepertoire; ?>" onclick="window.document.formrepertoire.submit()">
					<!-- Envois des données au formulaire + ràz -->
					<form method="post" name="formrepertoire">
						<input type="hidden" value="0" name="compose"></input> 
						<input type="hidden" value="1" name="repertoire"></input> 
						<input type="hidden" value="0" name="journal"></input> 
					</form>
					
					<h1>Répertoire</h1>
				</div>
				<div class="col" style="<?php echo $styleJournal; ?>" onclick="window.document.formjournal.submit()">
					<!-- Envois des données au formulaire + ràz -->
					<form method="post" name="formjournal">
						<input type="hidden" value="0" name="compose"></input> 
						<input type="hidden" value="0" name="repertoire"></input> 
						<input type="hidden" value="1" name="journal"></input> 
					</form>
					
					<h1>Journal</h1>
				</div>
			</div>
		</footer>
	
	</body>
</html>
	