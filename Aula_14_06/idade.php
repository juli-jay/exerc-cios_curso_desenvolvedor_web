<?php require_once 'cabecalho.php'; ?>
<form action="idade2.php" method="GET">
	<h1>Calculo da idade</h1>
<!--<h1>Digite seu ano de nascimento</h1>
	<p><input type="number" name="ano" step="1" min="1930" max="<?=date('Y')?>" required>
	<p><input type="submit" name="botao" value="Calcular"></p> -->
	<p>Digite a data de nascimento</p>
	<p><input type="date" name="datanasci"
		min="1930-01-01" max="<?date('Y-m-d')?>"
	required></p>
	<p><input type="submit" name="botao" value="calcular">
</form>
</body>
</html>


