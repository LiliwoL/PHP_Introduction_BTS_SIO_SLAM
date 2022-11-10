<?php

/**
 * Programme qui demande la saisie de 4 chiffres qui doivent constituer une adresse IP
 * 
 * Rappel: Une adresse IP contient 4 chiffres allant de 0 à 255 et séparés par des points
 * 
 * La saisie des 4 chiffres est stockée dans un tableau.
 * 
 * A partir du tableau, le programme doit générer une chaine de caractère contenant les 4 chiffres séparés
 * par des points.
 * 
 * Le programme doit afficher la chaine générée.
 * 
 * BONUS:
 *  - Afficher la classe A, B ou C
 */

 // Initialisation des variables
 $tab = array();        // Le tableau des chiffres
 $adresse = '';         // L'adresse IP en string

// 1. Saisie des 4 chiffres
for ($i = 0; $i <=3 ; $i++ )
{
    // Récupération de la saisie
    echo "Saisir un chiffre entre 0 et 255\n";
    $saisie = readline();

    // Vérification de la saisie
    if ( $saisie >= 0 && $saisie < 256)
    {
        // Si la saisie est valide, on ajoute au tableau
        $tab[] = $saisie;
    }else{
        echo "Erreur de saisie, on attend un chiffre entre 0 et 255";
        die;            // Arrêt du programme
    }
}

// 2. Génération de la chaine de caractère
for ($i = 0; $i <=3 ; $i++ )
{
    // Concaténation sur la chaine
    //$adresse = $adresse . $tab[ $i ];
    $adresse .= $tab[ $i ];

    // On concatène un point si on est pas à la dernière case
    if ($i < 3)
    {
        $adresse = $adresse . ".";
    }
}

// 3. Afichage
echo "Adresse IP: " . $adresse;

// BONUS: Afficher la classe

// Je regarde le premier digit
if ( $tab[0] <= 127 ){
    echo "\nClasse A";
}else if ($tab[0] <= 192){
    echo "\nClasse B";
}else if ($tab[0] <= 223){
    echo "\nClasse C";
}else if ($tab[0] <= 245){
    echo "\nClasse D";
}else {
    echo "\nClasse E";
}
