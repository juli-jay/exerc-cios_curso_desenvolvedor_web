<?php require_once 'cabecalho.php'; ?>
<form action="produto2.php" method="GET">
	<h1>Produto</h1>
	<p>Digite o preço unitário:</p>
	<p><input type="number" name="preco" step="0.01" required></p>
	<p>Digite a quantidade:</p>
	<p><input type="number" name="quantidade" step="0.01" required></p>
	<p><input type="submit" name="botao" value="multuplique"></p>
</form>
</body>
</html>