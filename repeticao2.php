<?php

    for($contador=1; $contador<=15; $contador++){

        if($contador==13 || $contador==15){
            continue;

        }
            echo "#$contador" . PHP_EOL;
       
       
    }
    echo PHP_EOL;

    for($contador2=15; $contador2>=1; $contador2--){
        
        if($contador2==5){
            break;

        }
            echo "#$contador2" . PHP_EOL;
       
       
    }