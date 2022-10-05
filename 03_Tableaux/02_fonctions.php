<?php

/*
Fonctions avec les tableaux
*/

// Initialisation d'un tableau
$tabEleves = array( 'Maxime', 'Noé', 'Johan', 'Melvyn', 'Marius');

echo "Le troisième élève est " . $tabEleves[2];

//************************************ */

// Initialise run tabvleau à partir d'une chaine

$tabEclate = explode( "*", "coucou*vous*allez*bien");

echo $tabEclate[3]; // Va afficher bien