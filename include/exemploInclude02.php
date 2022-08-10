<?php
include "exemploInclude01.php"; //Aqui estamos incluindo as informações do arquivo "exemploInclude01.php, basicamente é como se somente em uma linha, estivesse o arquivo inteiro do exemploInclude01.
//Nós colocamos apenas o nome do arquivo no include, pois eles estão na mesma pasta. Supondo que criassemos uma pasta chamada "inc" (na mesma pasta que estamos agora) e colocassemos o exemploInclude01, nós deveriamos colocar assim no include: "inc/exemploInclude01.php". Caso criassemos fora da pasta include, teriamos de usar os ../ .
//É uma boa prática criar uma pasta apenas para os arquivos de inclusão.
//Se usarmos "require" neste arquivo, o resultado seria o mesmo. Então você se pergunta: "ué, é a mesma coisa?". É ai que está, jovem mancebo, não é a mesma coisa e eu vou explicar o pq.
//A primeira diferença é que o require obriga que o arquivo exista e que o arquivo esteja funcionando corretamente. Se o arquivo não estiver funcionando ou não existir, ele retorna um fatal error.
//O include tenta funcionar mesmo que o arquivo não exista (??) ou tenha problemas, além do include ter mais recursos. Por exemplo, o diretório chamado: "include path", que permita que o include traga arquivos direto de lá. Esse diretório, por padrão, é configurado no php, no arquivo de instalação do php.
//Se colocarmos assim: 'include "funcoesDoPhp"', ele procura nessa pasta para ver se existe o tal "funcoesDoPhp". Caso não exista, ele vai ao diretório padrão (que você configorou no php, normalmente, não é todos que configuram) e se tiver ele traz do diretório padrão. Recomendo o uso do require.

require_once "exemploInclude01.php"; //O once traz uma vez só o arquivo (once serve para o include também) e o require_once faz com que só traga o arquivo uma vez e pede que o arquivo seja existente

$resultado = somar(10, 30); //Se rodarmos o código assim, o php não irá reconhecer a função somar, nesse exemploInclude02, a função somar não existe. É aí que entra o include.

echo $resultado;

?>