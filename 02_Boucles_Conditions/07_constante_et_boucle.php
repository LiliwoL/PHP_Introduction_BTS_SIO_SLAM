<?php

/*
    Ecrire un programme qui:

    * Définit la constante de l'année en cours (2022)
    * Demande l'âge de l'utilisateur
    * Demande le nom de l'utilisateur
    * Demande le prénom de l'utilisateur
    * Calcul l'année de naissance de l'utilisateur

    * Affiche "Bienvenue XXXXXX YYYYYYY" où XXXXX est le nom en MAJUSCULE et YYYYYYY est le prénom
    * Affiche "Vous êtes né(e) en XXXX" où XXXX est l'année de naissance
    * Affiche autant de bougies (🕯️) que l'âge de l'utilisateur


    * Documentation:
    * https://www.php.net/manual/fr/language.constants.php
    * https://www.w3schools.com/PHP/func_string_strtoupper.asp
*/

// Ce n'est pas une constante : $ANNEE = 2022;
// Par convention, les cosntantes sont en MAJUSCULES
define("ANNEE", 2022); // C'est une constante

echo "Saisir votre prénom:\n";
$prenom = trim(fgets(STDIN));

echo "Bonjour $prenom, saisir nom:\n";
$nom = trim(fgets(STDIN));

// Mise en majuscule
$nom = strtoupper($nom);

echo "Bonjour $prenom $nom, saisir votre âge:\n";
$age = trim(fgets(STDIN));

$annee_naissance = ANNEE - $age;

echo "Bienvenue $prenom $nom, vous êtes né(e) en :\n";
echo "$annee_naissance\n";

for ($i = $age; $i >= 0; $i--)
{
    echo "🕯️";
}