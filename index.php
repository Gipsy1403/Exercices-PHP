<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>exo PHP</title>
</head>
<body>
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

function EstPair($nbre){
	if($nbre%2==0){
		return TRUE;
	}else{
		return FALSE;
	}
}
if(EstPair(11)){
	echo "Le chiffre est paire";

}else{
	echo "le chiffre est impair";
}
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


	<h1>EXercice</h1><?php 
	$info ="h2";
	echo "<".$info."> sous-titre</".$info.">";
	?>
	<?php include("footer.php") ?>
</body>
</html>