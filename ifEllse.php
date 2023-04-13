<?php
    $idade=16;
    $numeroDePessoas=1;

    echo 'Você so pode entrar se tiver 18 anos ou mais ou se tiver 16 mas com 2 acompanhantes' . PHP_EOL;

    if($idade>=18){
        echo 'Você pode entrar ' . PHP_EOL;

    }else if($idade>=16 && $numeroDePessoas >1){ 

        echo "Você pode entrar mesmo tento $idade anos, pois esta com $numeroDePessoas acompanhantes" . PHP_EOL;

    }else{

        echo "Você não pode entrar pois tem menos de 18 anos e tem apenas $numeroDePessoas acompanhante" . PHP_EOL; 
    }
    
    echo 'Obrigado' . PHP_EOL;

   

    
