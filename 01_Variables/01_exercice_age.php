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

#création de la constante ANNEE
define('ANNEE', 2022);

# je demande l'age, le nom et le prenom
echo "Quel est ton âge?:\n";
$age = trim(fgets(STDIN));
echo "Ton nom?:\n";
$nom = trim(fgets(STDIN));
echo "Ton prénom?:\n";
$prenom = trim(fgets(STDIN));

# calcul de l'annee de naissance
$annee_naissance = ANNEE - $age;

# Salut
echo "Bonjour $prenom ". strtoupper($nom) . "\n";

# Affichage annee de naissance
echo "Vous êtes né(e) en $annee_naissance \n";

# boucle for pour ajouter autant de bougie que son age
for ($i=0; $i < $age; $i++) 
{
    echo "🕯️ ";
}
?>