<?php

//Operações

$idade = 38;
$idade5AnosAtras = $idade - 5;
$idadeDaqui10Anos = $idade + 10;

printf("\nIdade: ".$idade);
printf("\nMinha idade daqui 10 anos : ".$idadeDaqui10Anos);
printf("\nMinha idade à 5 anos àtras: ".$idade5AnosAtras);

$numero1 = 2;
$numero2 = 3;

$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$multilicacao = $numero1 * $numero2;
$divisão = $numero1 / $numero2;

printf("\nSoma: ".$soma);
printf("\nSubtração: ".$subtracao);
printf("\nMultiplicação: ".$multilicacao);
printf("\nDivisão: ".$divisão);

$numero1AoCubo = $numero1 * $numero1 * $numero1;
$numero2AoCubo = $numero2 ** 3;
$restoDaDivisao = $numero2 % $numero1;

printf("\nNúmero ".$numero1." ao cubo: ".$numero1AoCubo);
printf("\nNúmero ".$numero2." ao cubo: ".$numero2AoCubo);
printf("\nResto da divisão de ".$numero2." por ".$numero1.": ".$restoDaDivisao);



?>