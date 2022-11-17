<?php

    /**
     * Détermine le plus petit chiffre
     */
    function lePlusPetit ( int $a, int $b) : int
    {
        // Comparaison des chiffres
        if ( $a < $b ){
            $min = $a;
        }else{
            $min = $b;
        }

        return $min;
    }

    // Saisie des valeurs
    echo "Saisir un chiffre:\n";
    $nb1 = readline();
    echo "Saisir un deuxième chiffre:\n";
    $nb2 = readline();

    // Appel de la fonction
    $resultat = lePlusPetit( $nb1, $nb2);

    // Affichage du résultat
    echo "Résultat: " . $resultat;

