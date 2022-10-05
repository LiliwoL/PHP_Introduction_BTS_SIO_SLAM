<?php

/*
    Les tableaux en PHP
*/


// 1. On va demander 6 valeurs à l'utilisateur
for ( $i=0; $i <=5; $i++ )
{
    echo "Saisir une valeur \n";

    // Récupère la valeur (ou fgets)
    $valeur = trim(fgets(STDIN));

    // Ajouter la valeur au tableau
    $loto[ $i ] = $valeur;
}

// 2. On affiche certaines de ces valeurs

// La case 3
echo "La case 3 contient " . $loto[2];

echo "\n\n";

echo "La dernière  contient " . $loto[5];