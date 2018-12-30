<!DOCTYPE html>
<html>
<head>
	<title>Aula 6</title>
</head>
<body>
	<h1>Projeto controle remoto</h1>
	<?php
	require_once("ControleRemoto.php");
	
	$c = new ControleRemoto();

	$c->ligar();
	$c->abrirMenu();	

	?>
</body>
</html>