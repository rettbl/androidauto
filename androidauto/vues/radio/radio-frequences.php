<!DOCTYPE html>
<head>
	<meta HTTP-EQUIV="Refresh" CONTENT=";URL=">
</head>
<!-- PHP de récupération des variables -->
<?php
	
	if( ! isset( $_POST['station'] ) ) $_POST['station'] = 0;
	$station = $_POST['station'];;
	
	// Requete SQL pour récupérer les infos sur la station
	$mysqli = new mysqli('localhost', 'googlecar', 'googlecarMDP', 'androidauto');
	$req = "SELECT * FROM radio WHERE id=";
		// requete pour récupérer le selected
	$reqSelected = "SELECT * FROM radio WHERE selected =1";
	
	$numStation = $station;
	
	if ($station != 0 ) {
		$exeSQL = $mysqli -> query($req.$numStation);
		$afficheStation = $exeSQL -> fetch_assoc();
		
		$numeroStation =  $afficheStation['id'];
		$nameStation = $afficheStation['name'];
		$frequenceStation = $afficheStation['frequence'];
		
		// SQL pour le changement de la station selected
			// Préparation des requettes
		$reqUpdateReset = "UPDATE radio SET selected = 0 WHERE selected = 1";
		$reqUpdateAdd = "UPDATE radio SET selected = 1 WHERE id = ".$afficheStation['id'];
		
			// Exécutions des requettes
		if ($mysqli->query($reqUpdateReset) === true) {
			$mysqli->query($reqUpdateAdd);
		}
		
	}	
		else {
			// Remplacement de la session RADIO avec le bon selected
			$exeSQLselected = $mysqli -> query($reqSelected);
			$afficheStationSelected = $exeSQLselected -> fetch_assoc();
			
			$_SESSION['stationId'] = $afficheStationSelected['id'];
			$_SESSION['stationName'] = $afficheStationSelected['name'];
			$_SESSION['stationFrequence'] = $afficheStationSelected['frequence'];
			
			
			$numeroStation = $_SESSION['stationId'];
			$nameStation = $_SESSION['stationName'];
			$frequenceStation = $_SESSION['stationFrequence'];
		}
?>
<!-- JS pour le changement de fréquence -->
<script>
	function changementFreq(valeur){
		if (valeur == 1){ 
			if (freq >= 85.7){
				freq = freq - 0.1;
				document.getElementById("frequenceDeLaRadio").textContent=freq.toFixed(1);
				valeur = 0;
			}
		}else if(valeur == 2){
			if (freq <= 105){
				freq = freq + 0.1;
				document.getElementById("frequenceDeLaRadio").textContent=freq.toFixed(1);
				valeur = 0;
			}
		}
	}
</script>
<div class="body-radio-frequences" onload="yes('<?php echo $frequenceStation ; ?>')"> 
	<div id="station-name">
		<center>
			<h1 id="nameStation"><?php echo strtoupper($nameStation);?></h1><p><font size="6" id="numeroStation" value="<?php echo $numeroStation; ?>"><?php echo $numeroStation ; ?></font></p>
		</center>
	</div>
	<div id="bandeau-control">
		<div class="row">
			<div class="col">
				<button type="button" id="retourretour" onclick="changementFreq(1)">◄◄</button>
			</div>
			<div class="col">
				<button type="button" id="retour">◄</button>
			</div>
			<div class="col-sm">
				<h1><span id="frequenceDeLaRadio"></span></h1>
			</div>
			<div class="col">
				<button type="button" id="avancer">►</button>
			</div>
			<div class="col">
				<button type="button" id="avanceravancer" onclick="changementFreq(2)">►►</button>
			</div>
		</div>
	</div>
</div>

<?php
	require("Pdo_Connexion.php");
	require("pdoRadio.php");
?>

<script>
	
	frequenceDef = '<?php echo $frequenceStation ; ?>';
	
	freq = parseFloat(frequenceDef);
	if (freq != 0){
		document.getElementById("frequenceDeLaRadio").textContent=freq;
	}
	
	// Changement de la station avec les ◄ ► (ajax)
	
		// Clique sur retour
	$("#retour").click (function () {
		var nameSt = "";
		var idSt = "";
		var freqSt = "";
			//Vidage des parties d'info sur la station
		$( "#nameStation" ).empty();
		$( "#numeroStation" ).empty();
		$( "#frequenceDeLaRadio" ).empty();
		// Ajax
		$.ajax ({
			url: 'vues/radio/getLesRadioJSON.php',
			type: 'POST',
			data: "id=<?php if (($numeroStation - 1) == 0) {echo 12; } else {  echo $numeroStation -1;}  ?>",  //' + $('#numeroStation').val(),
			datatype: 'json',
			success: function (data) {
				$.each (data, function (key, value) {
					// nom de la station
					nameSt = value.name.toUpperCase();
					$('#nameStation').append(nameSt);
					// id de la station
					idSt = value.id
					$('#numeroStation').append(idSt);
					// frequence de la radio
					freqSt = value.frequence;
					$('#frequenceDeLaRadio').append(freqSt);
				});
				
				// rafraichit la page pour après recupérer les bonnes valeurs
				document.location.href="radio.php?$frequences=1";
			},
			error: function () {
				alert("ERREUR #2\n La station choisi n'a pa été trouvé ");
			}
		});
		
	});
	
		// Clique sur avancer
	$("#avancer").click (function () {
		var nameSt = "";
		var idSt = "";
		var freqSt = "";
			//Vidage des parties d'info sur la station
		$( "#nameStation" ).empty();
		$( "#numeroStation" ).empty();
		$( "#frequenceDeLaRadio" ).empty();
		// Ajax
		$.ajax ({
			url: 'vues/radio/getLesRadioJSON.php',
			type: 'POST',
			data: "id=<?php if (($numeroStation +1) == 13) {echo 1; } else {  echo $numeroStation +1;} ?>",  //' + $('#numeroStation').val(),
			datatype: 'json',
			success: function (data) {
				$.each (data, function (key, value) {
					// nom de la station
					nameSt = value.name.toUpperCase();
					$('#nameStation').append(nameSt);
					// id de la station
					idSt = value.id
					$('#numeroStation').append(idSt);
					// frequence de la radio
					freqSt = value.frequence;
					$('#frequenceDeLaRadio').append(freqSt);
				});
				
				// rafraichit la page pour après recupérer les bonnes valeurs
				document.location.href="radio.php?$frequences=1";
			},
			error: function () {
				alert("ERREUR #2\n La station choisi n'a pa été trouvé ");
			}
		});
	});
	
</script>
