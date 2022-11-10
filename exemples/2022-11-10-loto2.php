<?php

/**
 * Saisir un programme qui:
 *  * Donne 1000 de crédit à l'utilisateur
 *  * Définit un nombre mystère (entre 0 et 100)
 *  * Définit un nombre de tours possibles
 *  * Demande le nom de l'utilisateur
 *  * Demande autant de fois que de tours possibles une valeur à l'utilisateur
 *  
 * Chaque saisie doit:
 *  * Demander une valeur de mise
 *      * La mise ne peut être supérieure au crédit disponible
 * 
 *  * Vérifier la saisie avec le nombre mystère
 *      * Si égal, la mise est doublée
 *      * Si différent
 *          * la mise est retirée du crédit
 *          * Affiche si la saisie est supérieure ou inférieure au nombre mystère
 * 
 *  * Si le crédit est épuisé, c'est fini
 *  * Si le nombre mystère n'est pas trouvé dans le nombre de tours possible, c'est fini
 * 
 *  * Sinon c'est gagné
 */

 // 1. Initialisation
 define ('NB_TOURS', 5);
 define ('NB_MYSTERE', rand(0,100) );
 $credit = 1000;
 $gagne = false;


 // 2. Saisie
 //echo "Quel est votre nom?\n";
 //$nom = readline();

 echo "NB : " . NB_MYSTERE;

 // Saisie autant de fois que de tours disponibles
 for ($i=0; $i < NB_TOURS; $i++)
 {
    // Saisie de la mise si le crédit est positif
    if ($credit > 0)
    {     
        
        // Saisie de la mise en s'assurant que ça ne dépasse pas le crédit dispo
        echo "Votre mise? \n";
        $mise = (int) readline();
        while ( $mise > $credit){
            echo "Mise supérieure à votre crédit!\nVotre mise? \n";
            $mise = (int) readline();
        }

        // Saisie de la proposition
        echo "Votre proposition?\n";
        $proposition = (int) readline();
        while ( $proposition > 100){
            echo "Votre proposition doit être comprise entre 0 et 100!\nVotre proposition? \n";
            $proposition = (int) readline();
        }

        // Test de la proposition
        if ( $proposition == NB_MYSTERE )
        {
            $gagne = true;

            // Augmentation du crédit
            $credit += $mise*2;
            break;
        }else{
            // Baisse du crédit
            $credit -= $mise;

            // Affichage
            if ( $proposition < NB_MYSTERE)
            {
                echo "C'est plus\n";
            }else{
                echo "C'est moins\n";
            }
        }

    }else{
        echo "Crédit insuffisant\n";
        break;
    }    
 }

 // 3. Affichage
 if ($gagne)
 {
    echo "Gagné!";
 }else{
    echo "Perdu";
 }