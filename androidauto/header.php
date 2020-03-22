<div class="header container-fluid" style="background-color:<?php echo $_SESSION['theme'];?>; color: <?php echo $_SESSION['themefont'];?>;">
	
	<!-- Barre états -->
	<div class="row">
	
		<!-- Statut téléphone -->
		<div class="col" id="statutTel">
			<?php 
				if ($_SESSION['ConnectedToADevice']) {
			?>
			<span id="reseau">
				<!-- PHP traitement des info sur le niveau du signal du téléphone -->
				<?php
					$signal = 4;
					
					switch ($signal){
						case 0:
							echo" <img src='img/icon/signal-solid-$signal.png' class='img-fluid'>";
						break;
						case 1:
							echo" <img src='img/icon/signal-solid-$signal.png' class='img-fluid'>";
						break;
						case 2:
							echo" <img src='img/icon/signal-solid-$signal.png' class='img-fluid'>";
						break;
						case 3:
							echo" <img src='img/icon/signal-solid-$signal.png' class='img-fluid'>";
						break;
						case 4:
							echo" <img src='img/icon/signal-solid-$signal.png' class='img-fluid'>";
						break;
						case 5:
							echo" <img src='img/icon/signal-solid-$signal.png' class='img-fluid'>";
						break;
					}
				?>
			</span>
			<span id="batterie">
				<!-- PHP traitement des info sur la batterie du téléphone -->
				<?php
					$niveau = 78;
					
					if ($niveau <= 13) {
						echo" <img src='img/icon/battery-empty-solid.png' class='img-fluid'>";
					}
						elseif ($niveau <= 33) {
							echo" <img src='img/icon/battery-quarter-solid.png' class='img-fluid'>";
						}
							elseif ($niveau <= 63) {
								echo" <img src='img/icon/battery-half-solid.png' class='img-fluid'>";
							}
								elseif ($niveau <= 88) {
									echo" <img src='img/icon/battery-three-quarters-solid.png' class='img-fluid'>";
								}
									else {
										echo" <img src='img/icon/battery-full-solid.png' class='img-fluid'>";
									}
				?>
			</span>
			<?php 
				} 
			?>
		</div>
		
		<!-- Affichage de la température -->
		<div class="col-auto" id="weather">
			<!-- PHP pour la récupération de la température de l'api json -->
			<?php
				// DOCUMENTATION : https://www.prevision-meteo.ch/uploads/pdf/recuperation-donnees-meteo.pdf
				
				$json = file_get_contents('https://www.prevision-meteo.ch/services/json/ville-aux-dames'); //Récupération de l'api json
				$fichierJson = json_decode($json); // decodage du json
				
				$temperature = $fichierJson->current_condition->date;
				$temperature = 25;
				
			
			?>
			<h1><font size="6"><?php echo $temperature ;?>°c</font></h1>
		</div>
		
		<!-- Affichage de l'heure -->
		<div class="col" id="time">
			<strong><div id="div_horloge"></div></strong>
			
			<!-- Appel du script JS pour l'heure -->
			<script src="scriptJS/heure-date.js"></script>
			<script type="text/javascript">
				window.onload=function() {
					horloge('div_horloge');
				};
			</script>
		</div>
	
	</div>
</div>