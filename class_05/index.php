<!DOCTYPE html>
<html>
<head>
	<title>ContaBanco - Ligiano Version</title>
</head>
<body>
	<?php require_once("ContaBanco.php"); 

		$c1 = new ContaBanco();
		$c1->abrirConta('Jubileu', 'CP');
		$c1->depositar(300.00);
		$c1->sacar(100.00);
		$c1->pagarMensal();
		$c1->sacar(335.00);
	
        $c1->fecharConta();						
        
        echo "<br><br>";
		
		$c2 = new ContaBanco();
		$c2->abrirConta('Maria', 'CC');
		$c2->depositar(500.00);
		$c2->sacar(100.00);		



	?>


</body>
</html>