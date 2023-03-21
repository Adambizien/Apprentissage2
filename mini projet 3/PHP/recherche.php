<?php
 echo "<a href='annuaire.php'>annuaire?</a></br>
       <a href='affichage.php'>afficher le formulaire?</a></br>";
 if($_POST['snom'] or $_POST['sprenom']){
 	$nom=$_POST['snom'];
 	$prenom=$_POST['sprenom'];
 	$trouver =0;
 if(file_exists("annuaire.txt")){
 	$file=fopen("annuaire.txt", "r");
 	echo "<dl>";
 	while($ligne=fgets($file)){
 		$ligne = rtrim($ligne);
 		$donner = explode(";", $ligne);
 		if($donner[0]==$nom or $donner[1]==$prenom ){
 			++$trouver;
 	    	echo "<dt> $donner[0] $donner[1] </dt>";
 	    	echo "<dd> $donner[2] </dd>";
 	    	echo "<dd> $donner[3] $donner[4]</dd>";
 	    	echo "<dd> $donner[5] </dd>";
 		}
   	}
   	if($trouver==0){
   		echo "nous avons rien trouver!";
   	}
 	echo "</dl>";
 	fclose($file);
 }else{
 	echo "open error!!";
 	return false;
 }
}else{
	echo "vous n'avez rien mis !?";
	return false;
}
?>