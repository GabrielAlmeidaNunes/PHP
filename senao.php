<?php
    $idade= 16;
    echo 'Você so pode entrar se tiver 18 anos ou mais. ' . PHP_EOL;
    

    if($idade>=18){
        echo 'Você pode entrar.';
    }else{
        echo "Você não pode entrar pois tem apenas $idade anos" ;
    }   
    echo PHP_EOL;

    echo 'Ate Breve';