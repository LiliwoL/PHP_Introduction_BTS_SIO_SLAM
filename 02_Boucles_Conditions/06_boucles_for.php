<?php

// Boucle FOR

// On veut afficher 10 fois bonjour
for ( $i=0; $i<10; $i++ )
{
    echo "Bonjour\n";
    //echo "i vaut " . $i . "\n";
}


// Exercice
/*
*
**
***
****
*****
******
*******
********
*********
**********
*/

// Faire une variable
$etoile = "*";
for ( $i=0; $i<10; $i++ )
{
    echo $etoile . "\n";

    // ajoute une étoile
    $etoile = $etoile . "*";
}

// **********************

// On demande un chiffre et on affiche autant d'étoiles que le chiffre donné
echo "Donnez un chiffre: \n";
$variable = fgets( STDIN );

// Boucle avec un pas de décrémentation
for ( $i = $variable; $i>0; $i-- )
{
    echo "*";
}

