<?php

$multiplicador = 5;

echo PHP_EOL."Exibir a tabuada do número $multiplicador, de 1 até 9:".PHP_EOL.PHP_EOL;

for($i=1; $i<=9; $i++){
    $resultado = $multiplicador*$i;
    echo "$multiplicador x $i = $resultado".PHP_EOL;
}
echo PHP_EOL;
