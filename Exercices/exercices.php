<?php

// Demander la saisie d'une chaine, vous l'affichez à l'envers (sans utiliser de fonction)

// 1. Saisie
echo "Saisir une chaine\n";
$saisie = readline();
$indiceFin = strlen($saisie) -1;

// 2. Parcours inversé
for ( $i=$indiceFin; $i>=0; $i--)
{
    echo $saisie[$i] . " ";
}


// *************************************************************

// Demander une liste de 5 nombres que vous stockerez dans un tableau
// Affichez ensuite le total


// Demander une liste de nombres, que vous stockerez dans un tableau
// la saisie s'arrête quand l'utilisateur tape STOP,
// La saisie ne peut pas s'arrêter si il n'y a pas au moins 4 nombres
// Affichez ensuite les nombres



// Demander la saisie d'une chaine et n'en afficher qu'un caractère sur 2


// Demander une adresse mail et n'afficher que le nom de domaine

