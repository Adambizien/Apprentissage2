
<?php
if(empty($_POST['prenom']) ){
	echo "error !!!";
	return false;
}
$prenom = $_POST['prenom'];
if(is_numeric($prenom)==true){
	echo "error !!!";
	return false;
}
echo "Bonjour,";
for($i=0;$i < strlen($prenom) ;$i++){
	echo "<br/>",$prenom[$i];
}
?>