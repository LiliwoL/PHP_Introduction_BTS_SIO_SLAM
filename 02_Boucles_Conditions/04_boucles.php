<?php

echo "Les boucles\n";

// 1. Avec while
// **********************************************
$variable = 10; // Initialisation de la variable

// Boucle qui va s'éxécuter TANT QUE $variable est supérieur ou égal à 0
while ( $variable >= 0 )
{
    // Code de la boucle
    echo "Variable vaut: " . $variable . "\n";

    // Décrémenter $variable
    //$variable = $variable - 1;
    $variable--;
}

// Code exécuté quand on sortira de la boucle
echo "On est sorti de la boucle";