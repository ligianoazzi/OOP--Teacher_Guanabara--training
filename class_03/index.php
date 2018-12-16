<!DOCTYPE html>
<html>
<head>
	<title>Aula 02 - POO</title>
</head>
<body>
	<?php
		require_once 'Caneta.php';
		$c1 = new Caneta;
		$c1->modelo = "BIC Cristal";
		$c1->cor = "Azul";
		//$c1->ponta = 0.5; private attribute
		//$c1->carga = 99; protected attribute
		//$c1->tampada = true; protected protected
		print_r($c1);

		$c1->rabiscar();

		$c1->tampar();

		$c1->destampar();		


	?>
</body>
</html>