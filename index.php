<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>exo PHP</title>
</head>
<body>
<h1>Exercices PHP - FORMULAIRE</h1>

<h2>Exercice 1</h2><br>
<?php
if(isset($_GET["ville"]) && (isset($_GET["transport"]))){

echo "<p>La ville choisie est ".$_GET["ville"]." et le voyage se fera en ".$_GET["transport"]."...!</p>";
}
?> <br>

<h2>Exercice 2</h2><br>
<form action="index.php" method="GET">
	<label for="animal">Quel est votre animal favori ?</label>
	<input type="text" id="animal" name= "animal">
	<button>Envoyer</button>
</form>
<?php
if(isset($_GET["animal"])){
	$animal= $_GET["animal"];
	echo "<p>Votre animal choisi est" .$_get["animal"].".</p>";
	}
?> <br>

<h2>Exercice 3</h2><br>
<form action="index.php" method="post">
	<label for="couleur">Choisis une couleur.</label>
	<input type="color" id="couleur" name="couleur" value="#e66465" />
	<button>clic</button>
</form>
<?php
if(isset($_POST["couleur"])){
	$couleurs= $_POST["couleur"];
	echo $couleurs;
	echo "<p style='background-color:".$couleurs."'>Voici la couleur choisie</p>";
}
?> <br>


<h2>Exercice 4</h2><br>
<form action="index.php" method="post">
	<label for="des">Mets un nombre multiple de 6</label>
	<input type="number" id="des" name= "des">
	<button>Lance les dés</button>
</form>
<?php
if(isset($_POST["des"])){
	$des= $_POST["des"];
	if($des%6==0){
	echo rand(1,$des);
	}else{
		header("location:index.php?error=ce n'est pas un multiple de 6"); 
		// permet d'afficher un messsage d'erreur dans l'URL	
	}
}
if(isset($_GET["error"])){
	echo $_GET["error"];
	// permet d'afficher ce message d'erreur lorsque le nombre n'est pas correcte
};
?> <br>

<h2>Exercice 5</h2><br>
<form action="index.php" method="post">
	<label for="name">Nom</label>
	<input type="text" id="name" name= "name">
	<label for="mdp">Mot de Passe :</label>
	<input type="password" id="mdp" name= "mdp">
	<button>Envoyer</button>
</form>
<?php
$nameAdmin="admin";
$mdpAdmin=1234;
if(isset($_POST["name"])&& ($_POST["mdp"])){
	$name= $_POST["name"];
	$mdp= $_POST["mdp"];
	// hache le mdp cad le crypter avec ARGON2
	$mdpHash = password_hash($mdpAdmin, PASSWORD_ARGON2I);
	if(($nameAdmin==$name)&&(password_verify($mdp,$mdpHash))){
		// si le nom (donnée) est égal au nom de la base de donnée et que le mdp correspond au bon mdp vérifié( par la fonction password_verify)
		header("location:header.php");
		// si vrai, il ouvre une nouvelle page
	}else{
		echo "Message d'erreur: votre identification n'est pas correcte. Vérifiez votre nom ou votre mot de passe !";
	}
}

?> <br>




<h2>Exercice 6</h2><br>
<form action="index.php" method="post">
	<label for="number1">Mets un nombre</label>
	<input type="number" id="number1" name= "number1">
	<label for="number2">Mets un autre nombre</label>
	<input type="number" id="number2" name= "number2">
	<select name="operation" id="operation">
		<option value="multiplication">Multiplication</option>
		<option value="soustraction">Soustraction</option>
		<option value="addition">Addition</option>
		<option value="division">Division</option>
	</select>
	<button>Calcul</button>
</form>
<?php
if(isset($_POST["nombre1"])&& ($_POST["nombre2"])&&($_POST["operation"] )){
	$nombre1= $_POST["nombre1"];
	$nombre2= $_POST["nombre2"];
	$operation= $_POST["operation"];

	switch ($operation) {
		case 'addition':
		    $resultat = $nombre1 + $nombre2;
		    break;
		case 'soustraction':
		    $resultat = $nombre1 - $nombre2;
		    break;
		case 'multiplication':
		    $resultat = $nombre1 * $nombre2;
		    break;
		case 'division':
		    if ($nombre2 == 0) {
			   $error = "Erreur : Division par zéro interdite.";
		    } else {
			   $resultat = $nombre1 / $nombre2;
		    }
		    break;
		default:
		    $error = "Erreur : Opération non valide.";
		    break;
	 }
}
?> <br>

<h2>Exercice 10</h2><br>
<form action="index.php" method="post" enctype="multipart/form-data">
	<input type="file" name= "userfile">
	<button>envoyer</button>
</form>
<?php
// print_r($_FILES);
var_dump($_FILES["userfile"]);
$fileName =$_FILES["userfile"]["name"];
$temp=$_FILES["userfile"]["tmp_name"];

// var_dump(pathinfo($nomFichier));
move_uploaded_file($temp,"image/".$fileName);


?> <br>

	<h2 id="formpair">Est pair</h2>
	<form action="index.php#formpair" method="POST">
		<label for="EstPair">Entrez un nombre</label>
		<input type="number" id="EstPair" name= "EstPair">
		<button>Envoyer</button>
	</form>
<?php
	function EstPair($nbre){
		if($nbre%2==0){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	if(isset($_POST["EstPair"])){
		$EstPair= $_POST["EstPair"];
		}
	if(EstPair($EstPair)){
		echo "Le chiffre ".$EstPair." est paire";
	}else{
		echo "le chiffre " .$EstPair. " est impair";
	}


?>
	<?php include("header.php") ?>
	<h2>Exercice 1</h2><?php 
	for($i=0;$i<=25;$i++){
		echo $i;
	} ?>
	<br>
	<h2>Exercice 2</h2><?php 
	$nbre =25;
	while($nbre>0){
		echo $nbre ."<br>";
		$nbre= $nbre-1;
	} ?>
	<br>

	<h2>Exercice 3</h2> <br><?php 
$x=0;
for($y=0;$y<=25;$y++){
	 echo "<br>";
	 for($x=1;$x<=$y;$x++){
	echo $x ." ";
}
}
	?>
	<br>

	<h2>Exercice 4</h2> <br><?php 
$n=0;
for($x=1;$x<=30;$x++){
	$n=$x+$n;
}
echo $n;
	 ?>
	<br>

	<h2>Exercice 5 </h2><br><?php 


function Addition($firstNumber, $secondNumber){
	$total=$firstNumber+$secondNumber;
	return $total;
}
echo Addition(6,8) ."<br>";


	 ?>
	<br>

	<h2>Exercice 6 </h2><br><?php 

	 ?>
	<br>

	<h2>Exercice 7</h2> <br><?php 

	function Pythagore($b,$c){
		$a=($b*$b)+($c*$c);
		return $a;
	}
	echo Pythagore(3,5);
	 ?>
	<br>

	<h2>Exercice 8</h2> <br> <?php
	$heure=4;
	if($heure>=5 && $heure<=13){
		echo "C'est le matin";
	}elseif($heure>=13 && $heure<=20){
		echo "C'est l'après-midi";
	}else{
		echo "C'est le soir";
	}
	?>

<h2>Exercice 9</h2> <br><?php 

echo(EstPair(16)) ? "C'est un chiffre paire": "Ce n'est pas un chiffre paire";
 ?>
<br>

<h2>Exercice 10</h2> <br><?php 
for($nbre=1;$nbre<=100;$nbre++){
if($nbre%3==0 && $nbre%5==0){
	echo "foobar" ."<br>";
}elseif($nbre%3==0){
	echo "foo"."<br>";
}elseif($nbre%5==0){
	echo "bar"."<br>";
}else{
	echo $nbre ."<br>";
}}
 ?>
<br>

<h2>Exercice 11</h2> <br><?php 
$identitePersonne=[
	"nom" => "Croft",
	"prenom" => "Lara",
	"metier" => "Archéologue",
];
echo "<h1>C'est un plaisir de vous voir ".$identitePersonne["prenom"]." ".$identitePersonne["nom"]." ! (" .$identitePersonne["metier"].").</h1>"
 ?>
<br>

<h2>Exercice 12</h2> <br><?php 
$fighters=["Zelda","Samus","Bowser","Peach","Lucina"];
foreach($fighters as $fighters){
	if(strlen($fighters)==6){
		echo $fighters ." ";
	}
}
 ?>
<br>
<h2>Exercice 13</h2> <br><?php 
$nbre=[19,99,21,30,12,50,20,60,2,45];
$nbremin=[];
foreach($nbre as $nbre){
	if($nbre<$nbremin){
		$nbremin=$nbre;
	}
}
echo $nbremin;
 ?>
<br>

<h2>Exercice 14</h2> <br><?php 
$nbre=[19,99,21,30,12,50,20,60,2,45];
sort($nbre);
print_r($nbre);
 ?>
<br>


	<h1>Exercice</h1><?php 
	$info ="h2";
	echo "<".$info."> sous-titre</".$info.">";
	?>
	<?php include("footer.php") ?>





</body>
</html>