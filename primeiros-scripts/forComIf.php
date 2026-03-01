<?php

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach($numeros as $n){
    if($n % 2 == 0){
        echo ' '. $n.' é par  |';
    }
    else{
        echo ' '. $n.' é impar  |';
    }
}

?>