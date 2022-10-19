# BTS SIO SLAM 1

## Exercices récapitulatifs

* Conditions
* Boucles
* Tableaux
* Chaines de caractères

> Vous devrez fournir un fichier par question.
> Attention à nommer les fichiers en utilisant la convention suivante:
    question_XX.php
> XX correspond au numéro de la question
> Attention! ajoutez bien le 0 pour les numéros de question inférieurs à 10!
> question_01.php question_02.php ...


## Enoncés

Vous ne devez PAS utiliser de fonction autres que celles vues en cours.
Faites simple!
Vérifiez vos conditions d'entrée dans les boucles, mais aussi celles de sortie!

Il est demandé de systématiquement COMMENTER votre code

### Question 0

Produire l'affichage des entiers de 1 à 10 à l'aide d'une boucle while.
Idem avec une boucle for.

### Question 1

Demander la saisie d'une chaine, vous l'affichez à l'envers (sans utiliser de fonction)

### Question 2

Demander une liste de 5 nombres que vous stockerez dans un tableau.
Affichez ensuite le total.

### Question 3

Demander une liste de nombres, que vous stockerez dans un tableau.
La saisie s'arrête quand l'utilisateur tape STOP.
La saisie ne peut pas s'arrêter si il n'y a pas au moins 4 nombres.
Affichez ensuite uniquement les nombres pairs

> Pour savoir si un nombre est pair, le résultat de sa division doit être un entier
Il ne doit pas y avoir de reste.
Pour tester cela, on utilise l'opérateur MODULO %
https://www.php.net/manual/fr/language.operators.arithmetic.php

> Ainsi, 6%2 va renvoyer 0. 6 est donc un nombre pair


### Question 4

Demander la saisie d'une chaine et n'en afficher qu'un caractère sur 2

### Question 5

Demander une adresse mail et n'afficher que le nom de domaine (la partie après le @)
Si l'adresse n'a pas de symbole @, affichez que ce n'est pas une adresse valable

### Question 6

FizzBuzz

Écrivez un programme qui affiche tous les nombres entre 1 et 100 avec les exceptions suivantes :
Il affiche :
– « Fizz » à la place du nombre si celui-ci est divisible par 3.
– « Buzz » à la place du nombre si celui-ci est divisible par 5 et non par 3.
– « FizzBuzz » à la place du nombre si celui-ci est divisible à la fois par 3 et par 5.

Pour réussir, il faut utiliser l’opérateur modulo « % » qui renvoie le reste de la division d’un entier par un autre. Plus simplement si un chiffre est divisible par un autre, le reste est nul :

```php
10 % 2 => 0 (divisible)
alors que
5 % 2 => 1 (non divisible)
```

