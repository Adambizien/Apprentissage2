<?php
	$prenom = "Adam";
	echo"<p>Bonjour : $prenom!</p>";
	function bissextile($annee){
		if($annee%100==0 and $annee%4==0 or $annee%400==0){
			return true;
		}else{
			return false;
		}
	}
	if(empty($_POST['annee']) or empty($_POST['mois']) ){
    	echo"vous n'avez rien entrer <br/>";
    }else{
    	$annee =$_POST['annee'];
    	$mois = $_POST['mois'];

		echo "annee";
    	echo  bissextile($annee)?" est " : " n'est pas ";
    	echo "bissextile.\n";
		function nbjours($mois,$annee){
			if(bissextile($annee)==true and $mois==2){
				return  "29 j";
			}
			if(bissextile($annee)==false and $mois==2){
				return "28 j ";
			}
			if($mois==1){
				return  "31 j ";
			}
			if($mois==3){
				return "31 j";
			}
			if($mois==4){
				return "30 j ";
			}
			if($mois==5){
				return "31 j ";
			}
			if($mois==6){
				return  "30 j ";
			}
			if($mois==7){
				return "31 j ";
			}
			if($mois==8){
				return  "31 j ";
			}
			if($mois==9){
				return  "30 j ";
			}
			if($mois==10){
				return  "31 j ";
			}
			if($mois==11){
				return  "30 j ";
			}
			if($mois==12){
				return  "31 j ";
			}
		}
		echo " donc ";
		echo  nbjours($mois,$annee);
	}
	if(empty($_POST['anneearr']) or empty($_POST['anneedep'])){
		echo"vous n'avez rien entrer";
	}else{
		$anneearr = $_POST['anneearr'];
		$anneedep = $_POST['anneedep'];
		function between_bix($dep,$arr){
			for($dep;$dep<=$arr;$dep++){
				if(bissextile($dep) == true){
					echo "$dep : est bissextile <br/>"; 
				}else{
					echo "$dep : n'est pas bissextile <br/>"; 
				}
			}
		}
		echo between_bix($anneedep,$anneearr);
	}	
    
    
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ex1 php</title>
</head>
<body>
	<p>Bonjour! donne ta date de naissance pour savoir si c'est une année bissextile :</p>
	<form  method="post">
	<label for="annee">annee de naissance:</label>
			<input type="text" name="annee">
	<label for="mois">mois de naissance:</label>
			<input type="text" name="mois">
 	<br/>
	<p>quels sont les années bissextile entre</p>
	<label for="mois">annee de depart:</label>
		<input type="text" name="anneedep">
	<p>et</p>
	<label for="mois">annee d'arriver:</label>
			<input type="text" name="anneearr">
	<button type="submit" name="valider" >Envoyer</button>
	</form>


</body>
</html>