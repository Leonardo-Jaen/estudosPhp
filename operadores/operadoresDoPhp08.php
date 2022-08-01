<?php
$resultado1 = 10 + 3 / 2; //Aqui ele fara primeiro a divisão

$resultado2 = (10 + 3) / 2; //Dessa forma, podemos fazer a adição primeiro.

$resultado3 = (10 + 3) / 2 > 5 && 10 + 5 < 3; //O && significa "se as duas condições forem verdadeiras (neste caso)".

$resultado4 = (10 + 3) / 2 > 5 || 10 + 5 < 3; //O || significa OR, ele escolhe um ou outro. Ele deu true pois pelo menos uma das opções era verdadeira.

echo $resultado1;

echo "<br>";

echo $resultado2;

echo "<br>";

var_dump($resultado3);

echo "<br>";

var_dump($resultado4);
?>
