
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>annuaire</title>
</head>
<body>
	<a href="affichage.php">afficher le formulaire?</a>
	<form  method="post" action="traitement.php">
		<label>votre nom:</label>
			<input type="text" name="nom">
		<label>votre prenom:</label>
			<input type="text" name="prenom">
		<label>votre numéro:</label>
			<input type="text" name="num">
		<label>votre adresse:</label>
			<input type="text" name="adres">
		<label>votre ville:</label>
			<input type="text" name="ville">
		<label>votre email:</label>
			<input type="text" name="email">
		<button type="submit" name="go">enregistrer</button>
	</form>
	<form method="post" action="recherche.php">
		<p>vous chercher une personne ?</p>
		<label>nom:</label>
			<input type="text" name="snom">
		<label>prenom:</label>
		    <input type="text" name="sprenom">
		<button type="submit" name="go">go</button>
	</form>
</body>
</html>