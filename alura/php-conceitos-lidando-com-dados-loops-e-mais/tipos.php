
<?php
//Tipos de dados primitivos no PHP

//Inteiro, decimal (chamado de float ou double), booleano (verdadeiro ou falso) e string (texto).

//gettype() retorna o tipo da variável

//integer
$idade = 38;
print(gettype($idade)."\n");

//double
$salario = 1000.301;
print(gettype($salario)."\n");

//double
$divisao1 = 10 / 3;
printf(gettype($divisao1)."\n");

//integer
$divisao2 = 10 / 2;
printf(gettype($divisao2)."\n");

//string
$texto = "Olá mundo!";
printf(gettype($texto)."\n");

//boolean
$verdadeiro = true;
printf(gettype($verdadeiro)."\n");

//boolean
$falso = false;
printf(gettype($falso)."\n");

?>