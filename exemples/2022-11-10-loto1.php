<?php

/**
 * 
 * On a un tableau de 5 valeurs définies entre 0 et 20.
 * 
 * On attend la saisie d'un chiffre (entre 0 et 20) par l'utilisateur.
 *  La saisie doit impérativement:
 *      être un entier: is_int()
 *      être comprise entre 0 et 20
 * 
 * On vérifie si la saisie fait partie des valeurs prédéfinies.
 *  On parcoure le tableau de valeurs, pas de fonction!
 * 
 * Si oui, c'est gagné, sinon perdu.
 * 
 * BONUS:
 *  * les valeurs du tableau sont générées au hasard
 *  * système de mise et de gain
 */

 // 1. Initialisation
 $tab   = array(5,11,2,7,19);       // Tableau des valeurs
 $gagne   = false;                  // Indicateur de réussite
 
 // 2. Saisie et vérification du type
 echo "Saisir une valeur comprise entre 0 et 20\n";
 $saisie = (int) readline();    // On FORCE le type de saisie à INT

 if ( !is_int($saisie) || $saisie < 0 || $saisie > 20)
 {
    echo "Saisie incorrecte!";
    die;
 }

 // 3. Parcours du tableau et vérif que la saisie fait partie des valeurs dans le tableau
 foreach( $tab as $valeur )
 {
    // Test de la valeur en cours avec la saisie
    if ( $valeur == $saisie )
    {
        $gagne = true;  // On passe le jeton $gagne à true
        break;
    }
 }

 // 4. Affichage
 if ( $gagne ){
    echo "Gagné!";
 }else{
    echo "Perdu...";
 }
