<?php
$nome = $_GET["a"]; //$_GET é um array super global, ele vai ter todas as variaveis que recebemos pela url, através de um metodo GET. Toda informação que vier por GET ou POST vira em string.
$nome = (int)$_GET["a"]; //assim definimos que é inteiro. A url(Uniform Resource Location) é um conjunto de informções. A url é divida em varias partes conhecidas como uri(Uniform Resource Identifier) como por exemplo o 'http', ele é uma uri

//var_dump($nome);

$ip = $_SERVER["SCRIPT_NAME"]; // O $_SERVER pega informações do ambiente e não só do servidor


echo $ip;

//Site para boas praticas: https://www.php-fig.org/psr/psr-12/
?>