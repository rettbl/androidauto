// pour l'heure
function horloge(el) {
	if(typeof el=="string") { el = document.getElementById(el); }
	function actualiserHeure() {
		var heure = new Date();
		var concatHeure = heure.getHours();
		concatHeure += ':'+(heure.getMinutes()<10?'0':'')+heure.getMinutes();
		//concatHeure += ':'+(heure.getSeconds()<10?'0':'')+heure.getSeconds();
		el.innerHTML = concatHeure;
	}
	actualiserHeure();
	setInterval(actualiserHeure,1000);
}

// pour la date
function datum(rt) {
	if(typeof rt=="string") { rt = document.getElementById(rt); }
	function actualiserDate() {
		var date = new Date();
		var concatDate;
		// Obtenir le jour appartir du numéro du jour
		switch (date.getDay()){
			case 0:
				concatDate = "Dimanche ";
				break;
			case 1:
				concatDate = "Lundi ";
				break;
			case 2:
				concatDate = "Mardi ";
				break;
			case 3:
				concatDate = "Mercredi ";
				break;
			case 4:
				concatDate = "Jeudi ";
				break;
				case 5:
				concatDate = "Vendredi ";
				break;
			case 6:
				concatDate = "Samedi ";
				break;
		}
		
		concatDate += date.getDate();
		concatDate += " ";
		
		// Obtenir le mois appartir du numéro du mois
		switch (date.getMonth()) {
			case 0:
				concatDate += "Janvier";
				break;
			case 1:
				concatDate += "Février";
				break;
			case 2:
				concatDate += "Mars";
				break;
			case 3:
				concatDate += "Avril";
				break;
			case 4:
				concatDate += "Mai";
				break;
			case 5:
				concatDate += "Juin";
				break;
			case 6:
				concatDate += "Juillet";
				break;
			case 7:
				concatDate += "Août";
				break;
			case 8:
				concatDate += "Septembre";
				break;
			case 9:
				concatDate += "Octobre";
				break;
			case 10:
				concatDate += "Novembre";
				break;
			case 11:
				concatDate += "Décembre";
				break;
		}
				rt.innerHTML = concatDate;
	}
				actualiserDate();
				setInterval(actualiserDate,1000);
}
	
