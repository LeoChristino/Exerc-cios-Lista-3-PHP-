<?php 
$notas = array(10,-3,8,7,6,-6,4,3,2,-4);
echo "Negativos";
$cont = 0;
foreach ($notas as $key => $value) {
	if ($value < 0) {
		echo " | $value";
		$cont++;
	}
}
echo " (A quantidade de valores negativos é: $cont)";
$cont = 0;
echo "<br>Positivos";
foreach ($notas as $key => $value) {
	if ($value > 0) {
		echo " | $value";
		$cont++;
	}
}
echo " (A quantidade de valores positivos é: $cont)";
$cont = 0;
echo "<br> Pares";
foreach ($notas as $key => $value) {
	if ($value % 2 == 0) {
		echo " | $value";
		$cont++;
	}
}
echo " (A quantidade de valores pares é: $cont)";
$cont = 0;
echo "<br>Ímpares";
foreach ($notas as $key => $value) {
	if ($value % 2 == 1) {
		echo " | $value";
		$cont++;
	}
}
echo " (A quantidade de valores ímpares é: $cont)";
?>