<?php

// Calcul entre variables
echo "Opérande 1:\n";
$operande1 = fgets(STDIN);

echo "Opérande 2: \n";
$operande2 = fgets(STDIN);

echo "\n **************** \n";

// Calcul
$resultat = $operande1 * $operande2;

echo "Résultat: " . $resultat;