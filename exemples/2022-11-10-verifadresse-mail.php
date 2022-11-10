<?php

/**
 * Saisie d'une chaine de caractère
 * 
 * Le programme vérifie la présence du caractère @ dans la chaine.
 * Il affiche si l'adresse est valide ou non
 * 
 * Attention: Pas d'utilisation de fonction, uniquement une boucle de parcours de a chaine
 */

 // 1. Saisie
 echo "Saisir une adresse mail:\n";
 $saisie = readline();

 // 2. Parcours du début à la fin de la chaine
 for ($i=0; $i < strlen($saisie); $i++)
 {
    // Vérification du caractère en cours $saisie[ $i ]
    if ($saisie[$i] == '@')
    {
        echo "Présence de @, VALIDE!";
        // Arrêt du programme, inutile d'aller plus loin
        die;
    }
 }

 // 3. Si on est arrivé à ce niveau, c'est que @ n'a pas été trouvé
 echo 'NON VALIDE';