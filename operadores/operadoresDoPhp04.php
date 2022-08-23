<?php
$a = 30.0;

$b = 55;

var_dump($a > $b); //Aqui estamos vendo se é verdade que a variável "$a" é MAIOR que a variável "$b". O simbolo ">" representa maior.

echo "<br>";

var_dump($a < $b); //Aqui estamos vendo se é verdade que a variável "$A" é MENOR que a variável "$b". O simbolo "<" representa menor.

echo "<br>";

var_dump($a = $b); //Aqui nós tentamos comparar os dois, mas, não comparou, pois, apenas um sinal de igual "=" significa atribuição de valores.

echo "<br>";

var_dump($a == $b); //Aqui nós estamos comparando os dois utilizando os dois sinais de igual "==". A o utilizar os dois sinais juntos, nós comparamos (este "==" é comparação de valor, não de tipo).

echo "<br>";

var_dump($a === $b); //Aqui nós estamos comparando o valor e o tipo das variáveis utilizando três sinais de igual "===". A o utilizar três sinais juntos, nós comparamos identidade.

echo "<br>";

var_dump($a != $b); //Aqui nós estamos vendo se as variáveis são diferentes utilizando o sinal "!=".

echo "<br>";

var_dump($a !== $b); //Aqui nós estamos vendo se as variáveis são idênticas utilizando o sinal "!==". Aqui também vai validade o tipo de dado.;

//Site para boas praticas: https://www.php-fig.org/psr/psr-12/
?>