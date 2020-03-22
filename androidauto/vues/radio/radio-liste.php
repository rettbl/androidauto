<!DOCTYPE html>
<head>
	<script src="framework/forHome/jquery.min.js"></script>
	<script src="framework/forHome/popper.min.js"></script>
	<script src="framework/forHome/bootstrap.min.js"></script>
</head>

<div class="body-radio-liste">
<?php 
	//Connexion à la BDD
	$mysqli = new mysqli('localhost', 'googlecar', 'googlecarMDP', 'androidauto');
	$req = 'SELECT * FROM radio WHERE id=';

?>		

		<!-- Carrousel -->
		<script>
			jQuery(window).load(function() {
				/*Stop carousel*/
				$('.carousel').carousel('pause');
			});
		</script>
		
		<div id="demo" class="carousel slide" data-wrap="true" data-interval="false"> <!--data-ride="carousel"-->

			<!-- Indicators -->
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
			</ul>
  
			<!-- The slideshow -->
			<div class="carousel-inner">
		
				<!-- Première slide -->
				<div class="carousel-item active">
					<div id="page">
						<div class="row">
							<div class="col" onclick="window.document.choixstation1.submit()">
								<form method="POST" name="choixstation1" action="radio.php?$frequences=1">
									<input type="hidden" value="1" name="station"></input> 
									<?php
										$A = 1;
										$exeSQL1 = $mysqli -> query($req.$A);
										$afficheStation1 = $exeSQL1 -> fetch_assoc();
										//affichage
										echo"<center><h1>".$afficheStation1['name']."</h1></center>";
										echo "<div><font style='text-align: center;'><p>".$afficheStation1['id']."</p></font></div>";
									?>
								</form>
							</div>
							<div class="col" onclick="window.document.choixstation2.submit()">
								<form method="POST" name="choixstation2" action="radio.php?$frequences=1">
									<input type="hidden" value="2" name="station"></input> 
									<?php
										$B = 2;
										$exeSQL2 = $mysqli -> query($req.$B);
										$afficheStation2 = $exeSQL2 -> fetch_assoc();
										//affichage
										echo"<center><h1>".$afficheStation2['name']."</h1></center>";
										echo "<div><font style='text-align: center;'><p>".$afficheStation2['id']."</p></font></div>";
									?>
								</form>
							</div>
							<div class="col" onclick="window.document.choixstation3.submit()">
								<form method="POST" name="choixstation3" action="radio.php?$frequences=1">
									<input type="hidden" value="3" name="station"></input> 
									<?php
										$c = 3;
										$exeSQL3 = $mysqli -> query($req.$c);
										$afficheStation3 = $exeSQL3 -> fetch_assoc();
										//affichage
										echo"<center><h1>".$afficheStation3['name']."</h1></center>";
										echo "<div><font style='text-align: center;'><p>".$afficheStation3['id']."</p></font></div>";
									?>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="col" onclick="window.document.choixstation4.submit()">
								<form method="POST" name="choixstation4" action="radio.php?$frequences=1">
									<input type="hidden" value="4" name="station"></input> 
									<?php
										$d = 4;
										$exeSQL4 = $mysqli -> query($req.$d);
										$afficheStation4 = $exeSQL4 -> fetch_assoc();
										//affichage
										echo"<center><h1>".$afficheStation4['name']."</h1></center>";
										echo "<div><font style='text-align: center;'><p>".$afficheStation4['id']."</p></font></div>";
									?>
								</form>
							</div>
							<div class="col" onclick="window.document.choixstation5.submit()">
								<form method="POST" name="choixstation5" action="radio.php?$frequences=1">
									<input type="hidden" value="5" name="station"></input> 
									<?php
										$d = 5;
										$exeSQL5 = $mysqli -> query($req.$d);
										$afficheStation5 = $exeSQL5 -> fetch_assoc();
										//affichage
										echo"<center><h1>".$afficheStation5['name']."</h1></center>";
										echo "<div><font style='text-align: center;'><p>".$afficheStation5['id']."</p></font></div>";
									?>
								</form>
							</div>
							<div class="col" onclick="window.document.choixstation6.submit()">
								<form method="POST" name="choixstation6" action="radio.php?$frequences=1">
									<input type="hidden" value="6" name="station"></input> 
									<?php
										$d = 6;
										$exeSQL6 = $mysqli -> query($req.$d);
										$afficheStation6 = $exeSQL6 -> fetch_assoc();
										//affichage
										echo"<center><h1>".$afficheStation6['name']."</h1></center>";
										echo "<div><font style='text-align: center;'><p>".$afficheStation6['id']."</p></font></div>";
									?>
								</form>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Deuxième slide -->
				<div class="carousel-item">
					<div  id="page">
						<div class="row">
							<div class="col" onclick="window.document.choixstation7.submit()">
								<form method="POST" name="choixstation7" action="radio.php?$frequences=1">
									<input type="hidden" value="7" name="station"></input> 
									<?php
										$d = 7;
										$exeSQL7 = $mysqli -> query($req.$d);
										$afficheStation7 = $exeSQL7 -> fetch_assoc();
										//affichage
										echo"<center><h1>".$afficheStation7['name']."</h1></center>";
										echo "<div><font style='text-align: center;'><p>".$afficheStation7['id']."</p></font></div>";
									?>
								</form>
							</div>
							<div class="col" onclick="window.document.choixstation8.submit()">
								<form method="POST" name="choixstation8" action="radio.php?$frequences=1">
									<input type="hidden" value="8" name="station"></input> 
									<?php
										$d = 8;
										$exeSQL8 = $mysqli -> query($req.$d);
										$afficheStation8 = $exeSQL8 -> fetch_assoc();
										//affichage
										echo"<center><h1>".$afficheStation8['name']."</h1></center>";
										echo "<div><font style='text-align: center;'><p>".$afficheStation8['id']."</p></font></div>";
									?>
								</form>
							</div>
							<div class="col" onclick="window.document.choixstation9.submit()">
								<form method="POST" name="choixstation9" action="radio.php?$frequences=1">
									<input type="hidden" value="9" name="station"></input> 
									<?php
										$d = 9;
										$exeSQL9 = $mysqli -> query($req.$d);
										$afficheStation9 = $exeSQL9 -> fetch_assoc();
										//affichage
										echo"<center><h1>".$afficheStation9['name']."</h1></center>";
										echo "<div><font style='text-align: center;'><p>".$afficheStation9['id']."</p></font></div>";
									?>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="col" onclick="window.document.choixstation10.submit()">
								<form method="POST" name="choixstation10" action="radio.php?$frequences=1">
									<input type="hidden" value="10" name="station"></input> 
									<?php
										$d = 10;
										$exeSQL10 = $mysqli -> query($req.$d);
										$afficheStation10 = $exeSQL10 -> fetch_assoc();
										//affichage
										echo"<center><h1>".$afficheStation10['name']."</h1></center>";
										echo "<div><font style='text-align: center;'><p>".$afficheStation10['id']."</p></font></div>";
									?>
								</form>
							</div>
							<div class="col" onclick="window.document.choixstation11.submit()">
								<form method="POST" name="choixstation11" action="radio.php?$frequences=1">
									<input type="hidden" value="11" name="station"></input> 
									<?php
										$d = 11;
										$exeSQL11 = $mysqli -> query($req.$d);
										$afficheStation11 = $exeSQL11 -> fetch_assoc();
										//affichage
										echo"<center><h1>".$afficheStation11['name']."</h1></center>";
										echo "<div><font style='text-align: center;'><p>".$afficheStation11['id']."</p></font></div>";
									?>
								</form>
							</div>
							<div class="col" onclick="window.document.choixstation12.submit()">
								<form method="POST" name="choixstation12" action="radio.php?$frequences=1">
									<input type="hidden" value="12" name="station"></input> 
									<?php
										$d = 12;
										$exeSQL12 = $mysqli -> query($req.$d);
										$afficheStation12 = $exeSQL12 -> fetch_assoc();
										//affichage
										echo"<center><h1>".$afficheStation12['name']."</h1></center>";
										echo "<div><font style='text-align: center;'><p>".$afficheStation12['id']."</p></font></div>";
									?>
								</form>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
				
			</div>
		</div>
	</form>
	
</div>