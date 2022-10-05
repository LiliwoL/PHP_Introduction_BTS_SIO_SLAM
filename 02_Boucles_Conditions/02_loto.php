<?php

/*
  Ecrire un programme de loto qui:

  * Définit une constante du nombre de chances possibles (5)
  * Définit une constante qui contiendra un nombre au hasard entre 0 et 10 (cf. doc), on l'appelera le chiffre mystère

  * Le programme demande le nom de l'utilisateur

  * Le programme va demander à l'utilisateur un chiffre entre 0 et 10
  * La saisie de l'utilisateur va être testée pour voir si elle correspond au chiffre mystère

  * Si ça correspond, on affiche que l'utilisateur a gagné
  * Si ça ne correspond pas, on retire une chance à l'utilisateur et on redemande un nouveau chiffre

  * Si l'utilisateur n'a pas trouvé le chiffre mystère et a épuisé toutes ses chances, c'est perdu!

  * La fonction pour avoir un chiffre au hasard: https://www.php.net/manual/fr/function.rand.php
*/

// Constantes
define('CHANCES', 5);
define('CHIFFRE_MYSTERE', rand( 0, 10));

// Variable
$bingo = false;

// Message de bienvenue
echo "
db       .d88b.  d888888b  .d88b.  
88      .8P  Y8. `~~88~~' .8P  Y8. 
88      88    88    88    88    88 
88      88    88    88    88    88 
88booo. `8b  d8'    88    `8b  d8' 
Y88888P  `Y88P'     YP     `Y88P'  
                                   
\n\n";

# boucle
for ($i = CHANCES - 1; $i >= 0; $i--)
{
    // Choix
    echo "Quel est votre chiffre ?\n";
    $tentative = fgets(STDIN);

    // Test
    if ($tentative == CHIFFRE_MYSTERE)
    {
        echo "Bingo!\n";
        $bingo = true;
        break;
    }
    else
    {
        // Affichage nombre de chances
        echo "ERREUR!\n";
        echo "Il vous reste $i chances!\n";
    }
}

// Test si le chiffre a été trouvé
if ($bingo)
{
    echo "Bravo";
}
else
{
    echo "Le chiffre était " . CHIFFRE_MYSTERE;
}