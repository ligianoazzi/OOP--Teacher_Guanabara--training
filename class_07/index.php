<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php  
require_once('Lutador.php');

$lutador = array();

$lutador[0] = new Lutador("Ligiano", "Italia", 37, 1.63,80, 500, 0, 0);;
$lutador[1] = new Lutador("Maguila", "Brasil", 37, 1.63,80, 500, 0, 0);;


echo $lutador[0]->apresentar();
echo $lutador[1]->apresentar();

$lutador[0]->perderLuta();
$lutador[0]->perderLuta();
$lutador[0]->ganharLuta();


echo $lutador[0]->apresentar();
echo $lutador[1]->apresentar();


?>
</body>
</html>


