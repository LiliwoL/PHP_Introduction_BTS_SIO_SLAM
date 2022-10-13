<?

/*

On fournit une liste de phrases palindromes
Les élèves doivent les mettre dans un tableau
Chaque phrase doit être nettoyées pour ensuite être testée si c'est un palindrome ou non

*/

/*
    Liste des phrases fournies:

    Engage le jeu que je le gagne.
    Oh ! cela te perd, répéta l'écho.
Ce satrape repart à sec.
    Noir, ô hélas, Isis a le horion.
    Émile nu a une lime.
    Élu par cette crapule.
    Engage le jeu, que je le gagne.
Eh, ce lac né en calèche.
    Etc... art tracté.
    Lieur à Rueil.
    Rions noir.
    Tu l'as trop été, Port-salut.
    Un soleil du sud lie l'os nu.
Tu l'as trop écrasé César ce Port-Salut.
Ésope reste ici et se repose.
    Éric notre valet alla te laver ton ciré (fonctionne également avec Luc, ou avec "Emile Eric...ciré élimé" ou Emile Luc ...)
Caserne, genre sac.
    Élucide l'édicule.
    Éros s'essore.
    Et curé gorgé de grog éructe
    Rose utérus, à ma masure, tu es or !
    Nue, j'aime demi à jeun.
    Sa lèvre cervelas.
    Sévère mal à l'âme, rêves.
    Ta fesse n'a le désir irisé de l'ânesse, fat !
    Un socialiste, et si laïc, os nu.
À l'étape, épate-la !
    Eh ! ça va la vache ?
    Ève, leste lia l'ail et se lève.
    L'âme sûre ruse mal.
    L'ami naturel ? Le rut animal.
    Lune de ma dame d'été, été de ma dame de nul.
    Suce ses écus.
    La mariée ira mal
Et s'il énumère, Jérem, une liste ?
Dis beau lama t'as mal au bide ?
    Mettant Laval en thème.
    Salut Claire, finie frêle culasse.
    Angèle et Laurent enrôlaient les gens.
    Jeanne en luge, Jules en nage.
    Rossellini y nie l'essor.
    Une slave valse nue.
    La femme joue, elle a chaud, Jeanne en virage. J'arrive en nage au chalet où je m'affale.
    Un albatros sortable à nu. (Flavien Galin)
    La mariée ira mal
*/

$tabPalindromes = [
    "Engage le jeu que je le gagne",
"Oh ! cela te perd, répéta l'écho",
"Ce satrape repart à sec",
"Noir, ô hélas, Isis a le horion",
"Émile nu a une lime",
"Élu par cette crapule",
"Engage le jeu, que je le gagne",
"Eh, ce lac né en calèche",
"Etc... art tracté",
"Lieur à Rueil",
"Rions noir",
"Tu l'as trop été, Port-salut",
"Un soleil du sud lie l'os nu",
"Tu l'as trop écrasé César ce Port-Salut",
"Ésope reste ici et se repose",
"Éric notre valet alla te laver ton ciré",
"Caserne, genre sac",
"Élucide l'édicule",
"Éros s'essore",
"Et curé gorgé de grog éructe",
"Rose utérus, à ma masure, tu es or !",
"Nue, j'aime demi à jeun",
"Sa lèvre cervelas",
"Sévère mal à l'âme, rêves",
"Ta fesse n'a le désir irisé de l'ânesse, fat !",
"Un socialiste, et si laïc, os nu",
"À l'étape, épate-la !",
"Eh ! ça va la vache ?",
"Ève, leste lia l'ail et se lève",
"L'âme sûre ruse mal",
"L'ami naturel ? Le rut animal",
"Lune de ma dame d'été, été de ma dame de nul",
"Suce ses écus",
"La mariée ira mal",
"Et s'il énumère, Jérem, une liste ?",
"Dis beau lama t'as mal au bide ?",
"Mettant Laval en thème",
"Salut Claire, finie frêle culasse",
"Angèle et Laurent enrôlaient les gens",
"Jeanne en luge, Jules en nage",
"Rossellini y nie l'essor",
"Une slave valse nue",
"La femme joue, elle a chaud, Jeanne en virage. J'arrive en nage au chalet où je m'affale",
"Un albatros sortable à nu",
"La mariée ira mal"
];