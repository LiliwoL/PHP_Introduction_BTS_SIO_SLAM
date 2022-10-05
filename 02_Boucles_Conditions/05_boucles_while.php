<?php

// Les boucles

// 1. Initialisation de la variable
echo "Veuillez saisir un chiffre (maximum 100) : \n";
$variable = fgets(STDIN);

echo "**************************\n";


// 2. Boucle
/*
    Boucle qui va AFFICHER TOUS les nombres à partir de celui saisi par l'utilisateur
    jusqu'à 1000 (au maximum)
*/
while ( $variable <= 1000 )
{
    echo $variable . " ";

    // Incrémentation pour sortir de la boucle
    //$variable = $variable + 1;
    $variable++;
}

echo "Sortie de boucle";