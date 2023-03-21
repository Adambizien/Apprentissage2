
<?php
$op=isset($_POST['opera']) ? $_POST['opera'] :false;
if(empty($_POST['a'])){
	$a=0;
}else{
	$a=$_POST['a'];
}
if(empty($_POST['b'])){
	$b=0;
}else{
	$b=$_POST['b'];
}
if($b==0 and $op=='/' ){
	echo "error!!!";
	return false;

}
if($op=='+'){
	$c=$a+$b;
}
if($op=='-'){
	$c=$a-$b;
}
if($op=='*'){
	$c=$a*$b;
}
if($op=='/'){
	$c=$a/$b;
}

echo $a," ",$op," ",$b ," = ",$c;

?>