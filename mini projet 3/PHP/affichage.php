<?php
 echo "<a href='annuaire.php'>annuaire?</a>";
 if(file_exists("annuaire.txt")){
 	$file=fopen("annuaire.txt", "r");
 	echo "<dl>";
 	while($ligne=fgets($file)){
 		$ligne = rtrim($ligne);
 		$donner = explode(";", $ligne);
 	    echo "<dt> <span id='nom'> $donner[0] </span> <span id='prenom'> $donner[1] </span> </dt>";
 	    echo "<dd> $donner[2] </dd>";
 	    echo "<dd> <span id='adresse'>$donner[3]</span> </br> <span id='ville'> $donner[4]</span></dd>";
 	    echo "<dd> <a href='mailto:olivier.$donner[5]'> $donner[5] </a> </dd>";
 	}
 	echo "</dl>";
 	fclose($file);
 }else{
 	echo "open error!!";
 	return false;
 }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>affichage</title>
    <link rel="stylesheet"  href="../CSS/annuaire.css">
</head>
<body>

</body>
</html>