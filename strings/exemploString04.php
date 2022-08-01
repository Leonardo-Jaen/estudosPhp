<?php

$frase = "escrevi e sai correndo";

$q = strpos($frase, "correndo"); //a variavel se chama q de query, strpos serve para procurar uma palavra em uma frase/texto.

$texto = substr($frase, 0, $q); //a função substr serve para mostrarmos somente uma parte de um texto/frese. O primeiro parametro é: "qual texto pegaremos o trecho?". O segundo parametro é: "a partir de onde queremos procurar o trecho". O terceiro parametro é: "até onde vai o trecho?". Descobrimos que a variavel "$q" tem 14 casas até "correndo".

var_dump($q); //neste caso, retornara "14", a partir da letra zero("e" de escrevi), teremos de contar 14 casas para chegar em correndo.

var_dump($texto);

//veja mais sobre strings do php aqui: https://www.php.net/manual/pt_BR/language.types.string.php
?>