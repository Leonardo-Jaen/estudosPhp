<?php
// O que é escopo de variável? Significa "até onde essa variável sera enxergada". Podemos imaginar nossa própria casa, se falarmos razoavelmente alto nem todos ouvirão.
// Quando criamos uma variável, o escopo dela é chamado "escopo local". Essa variável só existe no arquivo que criamos, por exemplo: Se criarmos uma variável $nome no nosso arquivo e chama-lo, ela vai aparecer. Se mudarmos de arquivos, ela não aparece.

$nome = "Cindy"; // esse é o escopo principal, a variavel fora da função é diferente da variavel de dentro da função, mesmo tendo o mesmo nome.

function teste() { //O escopo é definido pelas chaves "{}"
    global $nome;// estamos dizendo que a variavel "nome" é a mesma dentro e fora do escopo.
    echo $nome;
}

function teste2() { //Aqui é outro escopo

}

teste();

//Site para boas praticas: https://www.php-fig.org/psr/psr-12/
?>