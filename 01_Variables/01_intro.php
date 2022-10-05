<?php

/*
    Voici un commentaire sur plusieurs lignes
*/

// Commentaire sur une ligne
echo "Hello BTS SIO 1";

// ******************************************

/*
    Les variables
*/

// Initialisation d'une variable avec le nom name
// et Affectation avec la valeur Noé
$name = 'name';

// Utiliser la variable en appelant son nom
echo $name;

// ******************************

// Initialisation d'une variable avec un type
(int) $quantite = 0;

// Affectation une valeur par l'utilisateur
echo "\n\nVeuillez taper un entier:";
$quantite = fgets(STDIN);

echo "Affichage de la valeur saisie:\n";
echo $quantite;