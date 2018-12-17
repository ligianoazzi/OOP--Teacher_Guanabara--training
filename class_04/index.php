<!DOCTYPE html>
<html>
<head>
	<title>Aula 04 - POO</title>
</head>
<body>
	<?php
		require_once 'Caneta.php';

		$c1 = new Caneta("BIC", "Azul", 0.5);
		print_r($c1);

		$c2 = new Caneta("KKK", "Verde", 1.0);
		print_r($c2);


	?>
</body>
</html>