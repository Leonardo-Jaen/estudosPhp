<?php

$nome = "cindy kanashiro";

$nome2 = "LEONARDO JAEN";

echo strtoupper($nome); //strtoupper é uma função que serve para deixar todas as letras em maiusculo. As parenteses servem para chamar a função e dentro dos parentes, estamos passando o argumento.

echo "<br>";

echo strtolower($nome2); //strtolower é o oposto, deixa tudo em minusculo.

echo "<br>";

echo ucwords($nome); //a primeira letra de cada palavra fica maiuscula com essa função.

echo "<br>";

echo ucfirst($nome); //essa função faz somente a primeira letra ficar maiuscula.
?>