<?php

/**
 * En utilisant la boucle while, afficher tous les codes postaux possibles pour le département 17.
 * 
 * Pour rappel, un code postal est composé de 5 chiffres.
 * Donc, de 17000 à 17999
 */

 // 1. Initialisation des variables et constantes
 $departement = 17;

 $codePostal = $departement * 1000;                 // Le premier code postal pour ce département
 $codePostalFinal = ($departement * 1000) + 999;    // Le dernier

 define ('CP_LAROCHELLE', 17000);



 // 2. Boucle
 while ( $codePostal <= $codePostalFinal) 
 {
    // Test de la constante
    if ($codePostal == CP_LAROCHELLE){
        echo "La Rochelle\n";
    }else{
        echo $codePostal . "\n";
    }    

    // Incrémentation
    $codePostal++;
 }