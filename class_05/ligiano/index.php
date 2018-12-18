<!DOCTYPE html>
<html>
<head>
	<title>ContaBanco - Ligiano Version</title>
</head>
<body>
	<?php require_once("ContaBanco.php"); 

		$c1 = new ContaBanco('CP');
		$c1->abrirConta('Jubileu');
		$c1->depositar(300.00);
		$c1->sacar(100.00);
		$c1->pagarMensal();				
        
        echo "<br><br>";
		
		$c2 = new ContaBanco('CC');
		$c2->abrirConta('Maria');
		$c2->depositar(500.00);
		$c2->sacar(100.00);		



	?>


</body>
</html>