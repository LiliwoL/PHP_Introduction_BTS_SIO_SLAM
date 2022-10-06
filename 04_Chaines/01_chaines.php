<?php

/**
 * Manipulation de chaine
 */
echo "Saisir une phrase: \n";
$chaine = readline();


// La longueur de a chaine
echo "La chaine fait " . strlen( $chaine ) . " caractères.\n";

// Afficher une case
echo "Quel indice? \n";
$indice = readline();

// Affichage
echo "A l'indice $indice, on a la lettre: $chaine[$indice]";

// ******************************

// Parcourir la chaine
for ( $i=0; $i < strlen($chaine); $i++)
{
    // On affiche la case en cours
    echo "A la position $i, on a $chaine[$i] \n";
}