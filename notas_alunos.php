<?php
$alunos = array('Lucas' => 5,'Leonardo' => 5,'Matheus' => 3,'Julia'=> 4,'Ana' => 9,'Thiago' => 4,'Rafael' => 2,'Gabriella'=>4,'Maria'=>7,'Bruna'=>9);
echo "A média das notas é ".array_sum($alunos)/10;
arsort($alunos);
echo "<br>A maior nota é do/a ";
echo key($alunos);
?>