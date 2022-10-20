<?php

// boucle d'affiche de 1 à 100
for ($i=1;  $i <= 100; $i++)
{
    // Affichage conditionnel


    // Fizz Buzz si divisible par 5 ET 3
    if ( $i % 5 == 0 && $i % 3 == 0 ){
        echo "FizzBuzz";
    }
    
    // Fizz si divisible par 3
    else if( $i % 3 == 0 ){
        echo "Fizz";
    }

    // Buzz si divisible par 5 et non par 3
    else if ( $i % 5 == 0 && !( $i % 3 == 0) ){
        echo "Buzz";
    }

    else{
        // Normal si aucun
        echo $i;
    }

    echo "\n";
}