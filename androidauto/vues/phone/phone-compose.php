<!DOCTYPE html>
<head>
	<meta HTTP-EQUIV="Refresh" CONTENT=";URL=">
</head>

<div class="body-phone-compose container">
	<div class="row" id="disposition">
		<div class="col">
			<center>
				<!-- Pavé numérique -->
				<div class="row" id="pavnum">
					<div class="col-4" id="1">
						<h1>1</h1>
					</div>
					<div class="col-4" id="2">
						<h1>2</h1>
					</div>
					<div class="col-4" id="3">
						<h1>3</h1>
					</div>
					<div class="col-4" id="4">
						<h1>4</h1>
					</div>
					<div class="col-4" id="5">
						<h1>5</h1>
					</div>
					<div class="col-4" id="6">
						<h1>6</h1>
					</div>
					<div class="col-4" id="7">
						<h1>7</h1>
					</div>
					<div class="col-4" id="8">
						<h1>8</h1>
					</div>
					<div class="col-4" id="9">
						<h1>9</h1>
					</div>
						<div class="col-4" id="star">
						<h1><font size="8">*</font></h1>
					</div>
					<div class="col-4" id="0">
						<h1>0</h1>
					</div>
					<div class="col-4" id="hastag">
						<h1>#</h1>
					</div>
					<div class="col-4" id="void">
					</div>
					<div class="col-4" id="plus">
						<h1>+</h1>
					</div>
					<div class="col-4" id="void">
					</div>
				</div>
			</center>
		</div>
		
		<!-- champs de numérotation et boutton appelé -->
		<div class="col action">
			<center>
				<div class="row">
					<!-- zone de texte -->
					<div class="col" id="zonesaisie">
						<h1 id="zonesaisie_remplisage"></h1>
					</div>
				</div>
				<div class="row">
					<!-- boutton supprimer -->
					<div class="col bouttonSupCall" id="supprimer" onclick="effacenum()">
						<center>
							<img src="img/icon/backspace-solid-white.png">
						</center>
					</div>
					<div class="col bouttonSupCall" id="call">
						<center>
							<img src="img/icon/phone-alt-solid-white.png">
						</center>
					</div>
				</div>
					
			</center>
		</div>
	</div>
</div>

<!-- JS -->
<script>
	numero = "";
	
	
	$("#1").click (function () {
		if (numero.length <=20 ) {
			numero = numero + '1';
			affichage(numero);
		}
	});
	$("#2").click (function () {
		if (numero.length <=20 ) {
			numero = numero + '2';
			affichage(numero);
		}
	});
	$("#3").click (function () {
		if (numero.length <=20 ) {
			numero = numero + '3';
			affichage(numero);
		}
	});
	$("#4").click (function () {
		if (numero.length <=20 ) {
			numero = numero + '4';
			affichage(numero);
		}
	});
	$("#5").click (function () {
		if (numero.length <=20 ) {
			numero = numero + '5';
			affichage(numero);
		}
	});
	$("#6").click (function () {
		if (numero.length <=20 ) {
			numero = numero + '6';
			affichage(numero);
		}
	});
	$("#7").click (function () {
		if (numero.length <=20 ) {
			numero = numero + '7';
			affichage(numero);
		}
	});
	$("#8").click (function () {
		if (numero.length <=20 ) {
			numero = numero + '8';
			affichage(numero);
		}
	});
	$("#9").click (function () {
		if (numero.length <=20 ) {
			numero = numero + '9';
			affichage(numero);
		}
	});
	$("#0").click (function () {
		if (numero.length <=20 ) {
			numero = numero + '0';
			affichage(numero);
		}
	});
	$("#star").click (function () {
		if (numero.length <=20 ) {
			numero = numero + '*';
			affichage(numero);
		}
	});
	$("#hastag").click (function () {
		if (numero.length <=20 ) {
			numero = numero + '#';
			affichage(numero);
		}
	});
	$("#plus").click (function () {
		if (numero.length <=20 ) {
			numero = numero + '+';
			affichage(numero);
		}
	});
	
	// Affichage du numéro 
	function affichage (numero) {
		$('#zonesaisie_remplisage').empty();
		$('#zonesaisie_remplisage').append(numero);
		console.log('Numéro saisie:' + numero);
		return true;
	}
	
	// Efface le numéro
	function effacenum () {
		$('#zonesaisie_remplisage').empty();
		numero = " ";
	}
	
</script>