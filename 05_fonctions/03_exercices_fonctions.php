<?php

/*
    Créer une fonction from scratch qui s'appelle quiEstLeMeilleurProf(). 
    Elle doit retourner la chaine de caractère: "Le prof de programmation Web"
*/

function quiEstLeMeilleurProf(): string
{
    return "Le prof de programmation Web";
}

// Appel
echo quiEstLeMeilleurProf();

echo "\n\n*************************************\n\n";

/*
    Créer une fonction from scratch qui s'appelle jeRetourneMonArgument(). 
    Exemple : 
        Arg = "abc" ==> Return abc 
        Arg = 123 ==> Return 123

    Note: le type du paramètre et du retour est donc inconnu à l'avance!
    https://www.php.net/manual/fr/language.types.declarations.php

    Note: Pour connaître sa version de PHP, dans un terminal, tapez: php -v

    Bonus: Afficher le type du paramètre fourni
*/
// mixed n'a été ajouté qu'à la version PHP 8.0
//function jeRetourneMonArgument( mixed $arg ): mixed
function jeRetourneMonArgument( $arg )
{
    return $arg;
}
echo "Je fournis l'agrument: 123\n";
echo jeRetourneMonArgument( 123 );
echo "\n";

echo "Je fournis l'agrument: truc\n";
echo jeRetourneMonArgument( "truc" );
echo "\n";

echo "\n\n*************************************\n\n";

/*
    Créer une fonction from scratch qui s'appelle concatenation(). 
    Elle prendra deux arguments de type string. 
    Elle devra retourner la concatenation des deux. 
    
    Exemple : 
        argument 1 = Donald 
        argument 2 = Duck
    Resultat : Donald Duck

    Note: Attention à ajouter un espace entre les deux!
*/
function concatenation( string $a, string $b): string
{
    return $a . " " . $b;
}
echo "Je fournis les arguments: \nDonald\nDuck\n\n";
echo concatenation( "Donald", "Duck" );
echo "\n";

echo "\n\n*************************************\n\n";

/*
    Créer une fonction from scratch qui s'appelle somme(). 
    Elle prendra deux arguments de type int. 
    Elle devra retourner la somme des deux. 
    Exemple : argument 1 = 5 Argument 2 = 5 ; Resultat : 10
*/

function somme( int $a, int $b): int
{
    return $a + $b;
}

// **********************************************

/*
    Créer une fonction from scratch qui s'appelle soustraction(). 
    Elle prendra deux arguments de type int. 
    Elle devra retourner la soustraction des deux. 
    Exemple : argument 1 = 5 Argument 2 = 5 ; Resultat : 0
*/

function soustraction( int $a, int $b): int
{
    return $a - $b;
}

// **********************************************

/*
    Créer une fonction from scratch qui s'appelle multiplication(). 
    Elle prendra deux arguments de type int. 
    Elle devra retourner la multiplication des deux. 
    Exemple : argument 1 = 5 Argument 2 = 5 ; Resultat : 25
*/

function multiplication( int $a, int $b): int
{
    return $a * $b;
}

// **********************************************

/*
    Créer une fonction from scratch qui s'appelle calcul().
    Elle ne prend aucun argument.
    Elle devra retourner le résultat d'un calcul basé sur les 3 opérations précedentes (addition, soustraction, multiplication).
    Donc elle devra retourner un type entier.

    Elle devra:
        * Demander la saisie de 2 opérandes
        * Demander la saisie d'un type de calcul (+ ou - ou *)
        * Selon le calcul choisi, la fonction doit appeler la bonne fonction et récupérer le résultat
        * Afficher le résultat du calcul
*/

function calcul(): int
{
    // Saisie
    echo "Opérande 1:\n";
    $op1 = (int) readline();
    echo "Opérande 2:\n";
    $op2 = (int) readline();

    echo "Quel calcul? [+,-,*]:\n";
    $calcul = readline();

    if ($calcul == "+")
    {
        // Appel de la méthode somme()
        $resultat = somme($op1, $op2);
    }else if ($calcul == "-")
    {
        // Appel de la méthode soustraction()
        $resultat = soustraction($op1, $op2);
    }else if ($calcul == "*")
    {
        // Appel de la méthode multiplication()
        $resultat = multiplication($op1, $op2);
    }else{
        $resultat = 0;
        echo "Calcul inconnu\n";
    }

    echo "Le résultat est: $resultat\n";

    return $resultat;
}
// Appel de la fonction calcul()
calcul();

echo "\n\n*************************************\n\n";

/*
    Créer une fonction from scratch qui s'appelle premierElementTableau(). 
    Elle prendra un argument de type array. 
    Elle devra retourner le premier élement du tableau. 
    Si l'array est vide, il faudra retourner null;
*/

// **********************************************

/*
    Créer une fonction from scratch qui s'appelle dernierElementTableau().
    Elle prendra un argument de type array.
    Elle devra retourner le dernier élement du tableau.
    Si l'array est vide, il faudra retourner null;
*/

// **********************************************

/*
    Créer une fonction from scratch qui s'appelle plusGrandDansTableau().
    Elle prendra un argument de type array. (On part du principe que c'est un tableau d'entiers)
    Elle devra retourner le plus grand des élements présent dans l'array.
    Si l'array est vide, il faudra retourner null;
*/

// **********************************************

/*
    Créer une fonction from scratch qui s'appelle plusPetitDansTableau().
    Elle prendra un argument de type array. (On part du principe que c'est un tableau d'entiers)
    Elle devra retourner le plus petit des élements présent dans l'array.
    Si l'array est vide, il faudra retourner null;
*/

// **********************************************

/*
    Créer une fonction from scratch qui s'appelle verificationPassword().
    Elle prendra un argument de type string.
    Elle devra retourner un boolean qui vaut true si le password respecte les règles suivantes :
    
    Faire au moins 8 caractères
    Avoir au moins 1 chiffre
    Avoir au moins une majuscule et une minuscule

*/

// **********************************************