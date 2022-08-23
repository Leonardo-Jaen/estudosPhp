<?php
$a = null;

$b = null;

$c = 10;

echo $a ?? $b ?? $c; //Aqui nós fizemos validações de uma maneira mais rápida. Funciona igual um IF, retorne valor "$a", se estiver null, retorne "$b", se estiver null, retorne "$c" (neste caso especifico, utilizamos esse no php7).

//Site para boas praticas: https://www.php-fig.org/psr/psr-12/
?>
