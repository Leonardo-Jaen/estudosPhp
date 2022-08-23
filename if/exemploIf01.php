<?php
// Estrutura básica do if
$qualASuaIdade = 125;

$idadeCrianca = 12; //Aqui nós criamos condições para usarmos no if.
$idadeMaior = 18;
$idadeAdulto = 65;

// If, em inglês, significa "SE". Se uma condição for verdade, então ele executará. A condição vai dentro das parenteses.
// O primeiro sempre será o "IF" e o último sempre será o "ELSE". Sabe o que está no meio dos dois?? o "ELSE IF" (criatividade para nomes passou longe, eu sei.)
if ($qualASuaIdade < $idadeCrianca) { //Usamos a palavra reservada "if", abrimos parenteses e, dentro das parenteses, colocamos uma condição, se for atendido como verdadeiro essa condição, ele irá executar o primeiro bloco (que esta dentro das chaves "{}").

    echo "Criança";

}else if ($qualASuaIdade < $idadeMaior ) {

    echo "Adolescente";

}else if($qualASuaIdade < $idadeAdulto) {

    echo "adulto";

} else {

    echo "morto";

}

echo "<br>";

echo ($qualASuaIdade < $idadeMaior) ? "menor de idade" : "maior de idade"; //isso se chama um if ternario, é a mesma coisa que fizemos ali em cima, só é mais rapido. Quando usarmos? sempre que for algo simples e rápido!

// Resumindo:
//
//IF, realiza um teste lógico, resultado é sempre um booleano
//
//ELSE IF, nasce a partir de um IF inicial ou outro ELSE IF, realiza um teste lógico, resultado é sempre um booleano e usados em casos específicos.
//
//ELSE, nasce a partir de um IF ou ELSE IF, não realiza um teste lógico, é executado quando todos os testes anteriores dão falso.

//Site para boas praticas: https://www.php-fig.org/psr/psr-12/
?>