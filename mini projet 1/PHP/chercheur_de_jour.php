<?php
function jour($j,$m,$A,$S){
	$t=(($j+floor(2.6*($m+1))+$A+floor($A/4)+floor($S/4)+(5*$S)+5)%7);
	if($t==0){
		return "lundi";
	}
	if ($t==1) {
		return "mardi";
	}
	if ($t==2) {
		return "mercredi";
	}
	if ($t==3) {
		return "jeudi";
	}
	if ($t==4) {
		return "vendredi";
	}
	if ($t==5) {
		return "samedi";
	}
	if ($t==6) {
		return "dimanche";
	}
}
if(isset($_POST['OK'])){
	if( empty($_POST['annee']) or empty($_POST['mois']) or empty($_POST['jour']) ){
		echo"vous n'avez rien entrer";
	}else{
		$j=$_POST['jour'];
		$m=$_POST['mois'];
		$A=$_POST['annee'];
		$S=floor($A/100);
		$A=$A%100;
		if($m==1 or $m==2){
			$m=$m+12;
			$A=$A-1;
		}
		echo jour($j,$m,$A,$S);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ex2</title>
</head>
<body>
<form  method="post">
	<label for="annee">annee: </label>
			<input type="text" name="annee">
	<label for="mois">mois:</label>
			<input type="text" name="mois">
	<label for="jour">jour:</label>
			<input type="text" name="jour">
	<label for="date">la date:</label>
			<input type="date" name="date"> 
	<button type="submit" name="OK" >Envoyer</button>
	</form>
	<?php
	if(isset($_POST['OK'])){
		if(isset($_POST['date'])){
			$date = $_POST['date'];
			$date = strtotime($date);
			$j=date('d',$date);
			$m=date('m',$date);
			$A=date('Y',$date);
			$S=floor($A/100);
			$A=$A%100;
			if($m==1 or $m==2){
				$m=$m+12;
				$A=$A-1;
			}
			echo jour($j,$m,$A,$S);
			echo "<br/>";
			//plus simple sans calcul:
			echo date('l',$date);
	    }
	}
	?>

</body>
</html>