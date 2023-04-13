<?php
    echo 'Numeros impares' . PHP_EOL;
    
    for($numero=1; $numero<=100; $numero++){
        if($numero%2==1){
            echo "Esse numero $numero é um numero impar" .PHP_EOL;
        }
    }