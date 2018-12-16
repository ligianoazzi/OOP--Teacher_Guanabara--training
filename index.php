<!DOCTYPE html>
<html>
<head>
	<title>Aula 02 - POO</title>
</head>
<body>
	<?php
		require_once 'Caneta.php';
		$c1 = new Caneta;
		$c1->cor = "Azul";
		$c1->ponta = 0.5;
		$c1->tampada = true;

		//var_dump($c1);
		//print_r($c1);

		$c1->rabiscar();
		$c1->destampar();		
		$c1->rabiscar();
		$c1->tampar();


		$c2 = new Caneta;
		$c2->cor = "Verde";
		$c2->carga = 50;
		$c2->tampar();

		print_r($c1);
		echo "<br>";
		print_r($c2);

	?>
</body>
</html>