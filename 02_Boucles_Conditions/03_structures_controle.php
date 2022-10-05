<?php

/*
    Structures de contrôle
*/
echo "Donnez une valeur: \n";
$test = fgets(STDIN);

// Test de la valeur (Condition)
if ($test > 100) {
    // Code exécuté si la condition est VRAIE
    echo "La valeur est supérieure à 100\n";
} else {
    // Code exécuté si la condition est FAUSSE
    echo "La valeur n'est pas supérieure à 100\n";
}


// ***********************************

echo "Mot de passe \n";
$password = trim(fgets(STDIN)); // On doit "nettoyer" le contenu de la variable $password avec la méthode trim()

echo "Vous avez tapé: " . $password . " qui contient " . strlen($password) . " caractères\n";

if ( $password == 'boite' ){
    echo "❤❤❤❤ OK";
}else{
    echo "NOK";
}
