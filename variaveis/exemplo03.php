<?php
//strings
$nome = "cindy";

$sobreNome = 'kanashiro';

//int
$ano = 2002;

//ponto flutuante
$salario = 7500.99;

//boolean

$bloqueado = false;

//array

$frutas = array("laranja", "tomate", "morango" );

echo $frutas[2]; // para selecionar qual item dentro do array, a contagem do array começa em 0


//objeto

$nascimento = new DateTime();

//var_dump($nascimento);

$arquivo = fopen("exemplo03.php", "r");

var_dump($arquivo);

//nulo é a ausencia de valor, não existe. 
//vazio é reservado na memória, só não tem nada.

//Site para boas praticas: https://www.php-fig.org/psr/psr-12/
?>