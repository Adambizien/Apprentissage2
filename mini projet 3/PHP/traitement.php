<?php
$error = 0;
if(empty($_POST['nom'])){
	echo "Vous n'avez pas mis votre nom !</br>";
	$error = -1  ;
}
if(empty($_POST['prenom'])){
	echo "Vous n'avez pas mis votre prenom !</br> ";
	$error = -1 ;
}
if(empty($_POST['num'])){
	echo "Vous n'avez pas mis votre numéro ! </br/> ";
	$error = -1 ;
}
if(empty($_POST['adres'])){
	echo "Vous n'avez pas mis votre adresse !</br> ";
	$error = -1 ;
}
if(empty($_POST['ville'])){
	echo "Vous n'avez pas mis votre ville !</br> ";
	$error = -1 ;
}
if(empty($_POST['email'])){
	echo "Vous n'avez pas mis votre email !</br> ";
	$error = -1 ;
}
if($error!=0){
	echo "Error 404 batards !!!";
	return false;
}
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$num=$_POST['num'];
$adres=$_POST['adres'];
$ville=$_POST['ville'];
$email=$_POST['email'];
if(file_exists("annuaire.txt")){
 	$file = fopen("annuaire.txt", "a");
 	if(fwrite($file,"$nom;$prenom;$num;$adres;$ville;$email\n")){
 	fclose($file);
 	echo 'le formulaire a été modifier ! <a href="annuaire.php">ici!</a>';
 	return true;
    }else{
    echo "erreur d'écriture!!!";
 	return false;
    }
}else{
 	echo "error du fichier!!!";
 	$error = -1;
 	return false;
 }

?>

