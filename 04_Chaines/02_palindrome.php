<?php

// 1. Saisie
echo "Saisir une chaine \n";
$saisie = readline();

// 2. Variables
$milieu = strlen($saisie) / 2;
$indiceDebut = 0;
$indiceFin = strlen($saisie) -1;
$palindrome = true;

// 3. Boucle
while ($indiceDebut < $milieu){

    // Test de la lettre située à $indiceDebut avec celle située à $indiceFin
    if ( $saisie[$indiceDebut] != $saisie[$indiceFin] )
    {
        $palindrome = false;
        break;
    }

    $indiceDebut++;
    $indiceFin--;
}

if ($palindrome)
{
    echo "C'est un palindrome!";
}
else{
    echo "Ce n'est pas un palindrome";
}