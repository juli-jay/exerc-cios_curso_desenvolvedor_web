<?php require_once 'cabecalho.php'; ?>
<section class="resultado">
<?php
/*
 	$ano1=$_GET['ano'];
    $idade=date('y')-$ano1;
    */
    $datanasci=$_GET['datanasci'];
    $hoje=date('Y-m-d');
    $datanasci=new Datetime($datanasci);
    $hoje=new Datetime ($hoje);
    $idade=$hoje->diff($datanasci)->y;
    echo "<p>Sua idade é $idade</p>";
    echo"<div><a href='idade.php' class='link'>
    Calcular Novamente?</a></div>";
?>
</section>
</body>
</html>