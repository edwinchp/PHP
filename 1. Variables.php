<title>Variables</title>

<h1>Variables en PHP</h1>

<?php 

$myVar1 = 30;
$myVar2 = 130;

?>

<p>Mi variable 1 es <strong><?php echo $myVar1;?></strong>.</p>
<p>Mi variable 2 es <strong><?php echo $myVar2;?></strong>.</p>
<hr>
<p>La suma de ambos es <strong><?php echo $myVar1 + $myVar2;?></strong>.</p>
<p>Si las resto es <strong><?php echo $myVar1 - $myVar2;?></strong>.</p>
<p>Si las multiplico es <strong><?php echo $myVar1 * $myVar2;?></strong>.</p>

<hr>
<h2>Ejercicio 1</h2>

<p>En enero, un granjero tiene 30 vacas, 80 conejos y 300 pavos. En febrero vendió 20 vacas, 55 conejos y 222 pavos. ¿Cuántos animales le quedaron?</p> <span>Mostrar el desgloce como el ejemplo anterior.</span>

<?php
//Enero
$eneroVacas = 30;
$eneroConejos = 80;
$eneroPavos = 300;

//Febrero
$febreroVacas = $eneroVacas - 20;
$febreroConejos = $eneroConejos - 55;
$febreroPavos = $eneroPavos - 222;

?>

<p>En febrero quedan <?php echo $febreroVacas; ?> vacas.</p>
<p>En febrero quedan <?php echo $febreroConejos; ?> conejos.</p>
<p>En febrero quedan <?php echo $febreroPavos; ?> pavos.</p>


