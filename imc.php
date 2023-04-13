<?php

    $altura = 1;
    $peso = 29.9;

    $imc= $peso/($altura*$altura);

    echo "Seu é de $imc "  . PHP_EOL;

    if($imc>30){
        echo "Seu IMC  esta acima do permitido, valor considerado com obesidade";

    }else if($imc>=25){
        echo 'Seu IMC é de SobrePeso';

    }else if($imc>=18.5 ){
        echo 'Seu IMC esta adequado';

    }else{
        echo 'Seu IMC esta abaixo do recomendado';
    }

