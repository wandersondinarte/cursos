<?php

$altura = 1.76;
$peso = 76;
$imc = $peso / ($altura ** 2);

echo PHP_EOL."Calculo do IMC para a altura de $altura cm e peso de $peso kg.".PHP_EOL.PHP_EOL;

echo "O seu IMC é $imc. ";

if($imc < 18.5){
    echo "Está abaixo do valor recomendado, foi classificado como MAGREZA.";
} else if($imc >= 18.5 && $imc < 25){
    echo "Está dentro do valor recomendado, classificado como NORMAL. ";
}else if($imc >= 25 && $imc < 30){
    echo "Está acima do valor recomendado, classificado como SOBREPESO, com Obesidade de Grau I.";
}else if($imc >= 30 && $imc < 40){
    echo "Está acima do valor recomendado, classificado como OBESIDADE, com Obesidade de Grau II.";
}else if($imc >= 40){
    echo "Está acima do valor recomendado, classificado como OBESIDADE MORBIDA, com Obesidade de Grau III.";
}
echo PHP_EOL.PHP_EOL;