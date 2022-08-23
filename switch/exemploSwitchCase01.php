<?php
// É um pouco diferente do if. A principal diferença entre o switch e o if é que no caso do switch, eu já sei quais são as opções que virão. No caso do if, não, como são muitas opções, eu falo "se for isso, vc trata desta maneira". Já o switch não, seria assim "caso aconteça isso, você faz isso, caso contrario, você pode definir um valor padrão".
// Imagine que temos um if e um else if onde cada uma das condições nós fizéssemos com um "=", o primeiro valor é igual tal coisa, o segundo é igual tal coisa, e assim, sucessivamente.
$diaDaSemana = date("w"); // Função nativa do php
$diaDaSemana2 = 8;
switch ($diaDaSemana) {
    case 0:
        echo "Domingo";
        break; //Aqui é para o código entender que finaliza o case.
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sabado";
        break;
}

echo "<br>";

//Este segundo switch foi feito só para mostrar o uso do "default".
switch ($diaDaSemana2) {
    case 0:
        echo "Domingo";
        break; //Aqui é para o código entender que finaliza o case.
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sabado";
        break;
    default:
        echo "data invalida";
        break; //se qualquer coisa for diferente dos cases, ele vai para o default.
}
?>