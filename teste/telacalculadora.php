<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Somar</title>
</head>
<body>
	<form action="telacalculadora.php" method="GET">
		<h1>Somar</h1>
		<p>Digite um número:</p>
		<p><input type="text" name="numero1" size="3"></p>
		<P>Digite outro número:</P>
		<p><input type="text" name="numero2" size="3"></p>
		<p><input type="submit" name="botao" value="Somar"></p>
	</form>
<?php
		if (isset($_GET['botao'])) {
			require_once 'model/Calculadora.php';
			$calculadora=new Calculadora();
			try{
				$calculadora->setNumero1($_GET['numero1']);
				$calculadora->setNumero2($_GET['numero2']);
				echo $calculadora->somar(
				$calculadora->getNumero1(),$calculadora->getNumero2());
			}catch(Exception $e){
				echo $e->getMessage();
			}
		}
?>
</body>
</html>