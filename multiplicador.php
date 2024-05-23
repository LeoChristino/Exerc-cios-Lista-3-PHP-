<?php
$notas = array(10,-3,8,7,6,-6,4,3,2,-4);
$multi = 6; //Digite o número multiplicador
foreach ($notas as $key => $value) {
	echo $value." x ".$multi." = ". ($value*$multi)."<br>";
}
?>