<?php
//Algumas regrar sobre variaveis, nós temos algumas restricoes. Uma boa sugestão a o criar uma variavel é criar usando nomes autoexplicativos. 
//Existe um padrão chamado camelCase que diz para começar com a primeira letra em minúsculo e, se for uma palavra composta, para cada nome, colocamos letra maiuscula.
//Um bom exemplo é o nome dos personagens de jogo, se fossemos fazer uma variavel sobre eles, seria assim:

$josephJoestar = "JoJo"; //perceba que o segundo nome começa com a letra maiuscula.

$nome1 = "cindy"; //pode pois o numero está no final da variavel, se for colocar numero no final da variavel, veja se faz sentido.

$sobreNome = "kanashiro";

$nomeCompleto = $nome1 . " " . $sobreNome; //as " " (aspas) separadas servem para dar espaço na concatenação

echo $nomeCompleto;

exit; //o codigo para de ler aqui, no exit

//$1nome = "sla"; não pode, pois vai dar erro, você não podera nem criar.

$nome_1 = "cley"; //de caracter especial, só pode o underline.

echo $nome1;
echo "</br>";

unset($nome1); //unsset serve para remover ela da memoria, a variavel é "excluida".

if (isset($nome1)) {

    echo $nome1;
}


//Nos temos no php 8 tipos de dados primitivos dividos em 3 grupos. O primeiro grupo nós chamaremos de tipos básicos, que são:
//O inteiro (numerico), A string(texto), Ponto flutuante(133.4) e boolean (v ou f).
//O segundo grupo são os compostos, e nele tem: Array e Objetos.
//E por ultimo, os tipos de dados especiais: Resourse e null.

//Site para boas praticas: https://www.php-fig.org/psr/psr-12/