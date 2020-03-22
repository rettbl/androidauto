<!DOCTYPE html>
<html style="width: 100%; height: auto%">
	<head>
		<title>Android Auto - Radio</title>
		<link rel="stylesheet" href="framework/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="style.css">
		<script src="framework/forHome/jquery.min.js"></script>
	</head>
	<!-- Session PHP -->
	<?php
		session_start();
		
		if ($_SESSION['theme'] == 'white'){
			$iconeHome = 'img/icon/home-dark.png';
		}else{
			$iconeHome = 'img/icon/home-light.png';
		}
	?>
	
	<body class="radioOverlay container-fluid" style="color: <?php echo $_SESSION['themefont'];?>; background-color:<?php echo $_SESSION['theme'];?>;">
		
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
			if( ! isset( $_POST['frequences'] ) ) $_POST['frequences'] = 0;
			if( ! isset( $_POST['liste'] ) ) $_POST['liste'] = 0;
			if( ! isset( $_POST['options'] ) ) $_POST['options'] = 0;
			
			$theme = $_SESSION['theme'];
			
			$frequences = $_POST['frequences'];
			$liste = $_POST['liste'];
			$options = $_POST['options'];
			
			$styleFrequences = 'border-right: 2px solid red; border-top: 2px solid red;';
			$styleListe = 'border-right: 2px solid red; border-top: 2px solid red;';
			$styleOptions = 'border-top: 2px solid red;';
			
			
			// Selection des sous menu
			if ($liste == 1){ // Selection de Fréquences
				
				$styleListe ='border-top: none; border-right: 2px solid red; background: linear-gradient('.$theme.', 90%, red);';
				
				include ('vues/radio/radio-liste.php');
				
			} elseif ($options == 1){ // Selection de Options
				
				$styleOptions = 'border-top: none; background: linear-gradient('.$theme.', 90%, red);';
				
			} else { // Selection par défaut 
				
				$styleFrequences = 'border-top: none; border-right: 2px solid red; background: linear-gradient('.$theme.', 90%, red);';
				
				include ('vues/radio/radio-frequences.php');
			}
			
		?>
		
		<!-- Footer des menus -->
		<footer class="footerRadio">
			<div class="row">
				<div class="col-auto" style="border-right: 2px solid red; width: 10%; border-top: 2px solid red;" onclick="document.location='../androidauto/home.php'">
					<center>
						<img src="<?php echo $iconeHome; ?>" class="img-fluid" style="width: 70px;">
					</center>
				</div>
				<div class="col" style="<?php echo $styleFrequences; ?>" onclick="window.document.formfrequences.submit();">
					<!-- Envois des données au formulaire + ràz -->
					<form method="post" name="formfrequences">
						<input type="hidden" value="1" name="frequences"></input> 
						<input type="hidden" value="0" name="liste"></input> 
						<input type="hidden" value="0" name="options"></input> 
					</form>
					
					<h1>Fréquences</h1>
				</div>
				<div class="col" style="<?php echo $styleListe; ?>" onclick="window.document.formliste.submit()">
					<!-- Envois des données au formulaire + ràz -->
					<form method="post" name="formliste">
						<input type="hidden" value="0" name="frequences"></input> 
						<input type="hidden" value="1" name="liste"></input> 
						<input type="hidden" value="0" name="options"></input> 
					</form>	
					
					<h1>Liste</h1>
				</div>
				<div class="col" style="<?php echo $styleOptions; ?>" onclick="window.document.formoptions.submit()">
					<!-- Envois des données au formulaire + ràz -->
					<form method="post" name="formoptions">
						<input type="hidden" value="0" name="frequences"></input> 
						<input type="hidden" value="0" name="liste"></input> 
						<input type="hidden" value="1" name="options"></input> 
					</form>
					
					<h1>Options</h1>
				</div>
			</div>
		</footer>
	</body>
</html>