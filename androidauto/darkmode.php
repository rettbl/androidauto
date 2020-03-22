<!DOCTYPE html>
<html>
	<head>
		<title>Android Auto</title>
	</head>
	<!-- JAVA SCRIPT -->
	<script src="scriptJS/heure-date.js"></script>
	<script type="text/javascript">
	
		// appel des fonctions quand la page load
		window.onload=function() {
			horloge('div_heure');
			datum('div_date');
		};
		
	</script>
	
	<style>
		body {
			height: 100%;
			margin: 0;
			padding: 0;
			color: white;
			background-color: black;
		}
		.horloge {
			margin-right: auto;
			margin-left: auto;
			
			margin-top: 20%;
			margin-bottom: auto;
			
			text-align: center;
		}
		.horloge #div_heure {
			font-weight: bold;
			font-size: 7em;
		}
		.horloge #div_date {
			font-size: 1.5em;
		}
	</style>
	
	<body onclick="document.location='<?php echo $_SERVER['HTTP_REFERER'];?>'">
		<div onclick="document.location='<?php echo $_SERVER['HTTP_REFERER'];?>'" style="width: 100%; height: 99%">
			<!--<h1><?php echo $_SERVER['HTTP_REFERER'];?></h1>-->
			
			<!-- Affaichage de l'heure et de la date -->
			<div class="horloge">
				<div id="div_heure"></div>
				<div id="div_date"></div>
			</div>
		
		</div>
	</body>
</html>