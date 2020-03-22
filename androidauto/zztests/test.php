<!DOCTYPE html>
<html>
	<head>
		<title>Bootstrap Example</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../framework/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="test.css">
		<script src="framework/forHome/jquery.min.js"></script>
		<script src="framework/forHome/popper.min.js"></script>
		<script src="framework/forHome/bootstrap.min.js"></script>
	</head>
	<body style="background-color: black; color: white;" class="container-fluid">
		<div class="row">
			<div class="col" onclick="window.document.choixstation1.submit()">
				<form name="choixstation1" method="POST" action="">
					
						<input type="hidden" value="3" name="issou">
						<h1>Salut</h1>
				</form>
			</div>
				<div class="col">
					<form name="choixstation2" method="POST" action="">
						<div style="width:100%;" onclick="window.document.choixstation2.submit()">
							<input type="hidden" value="50" name="issou">
							<h1>Les</h1>
						</div>
					</form>
				</div>

				<div class="col">
					<form name="choixstation3" method="POST" action="">
						<div style="width:100%;" onclick="window.document.choixstation3.submit()">
							<input type="hidden" value="78" name="issou">
							<h1>Amis</h1>
						</div>
					</form>
				</div>
		</div>
		<div class="row">
			<div class="col">
				<h1>Salut</h1>
			</div>
			<div class="col">
				<h1>Les</h1>
			</div>
			<div class="col">
				<h1>Amis</h1>
			</div>
		</div>
		<form>
			<input type="text" name="lol">
		</form>
		<?php
			print_r($_POST);
		?>
		
		<!-- Alerte box -->
		
		<button onclick="mavie()">Appuye pas </button>
		
		<script>
			
			function mavie() {
				var msg =" Salut ";
				if (confirm(msg) === true) {
					
					alert("c oui");
					document.location.href="../index.php";
				}else {
					alert("c non");
				}
			}
		</script>
			
		
		
		<iframe src="https://tunein.com/embed/player/s2109/" style="width:100%; height:100px;" scrolling="no" frameborder="no"></iframe>
		
		
		<br><br><br>
		
		<script src="bluetooth.js"></script>
		<script>
			var i = 1;
			
				setInterval(issou, 3000);
			
		</script>
	
		
		
	</body>
</html>