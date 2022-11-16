Exercice 1
Ecrire une fonction qui calcule le volume d’un rectangle, dont on connait la largeur, la longueur et la hauteur.

Exercice 2

Ecrire une fonction qui prend deux nombres en paramètre et fait la moyenne de ces deux nombres.

Exercice 3

Ecrire une fonction qui prend en paramètre un tableau de nombre, et afficher la moyenne.
Tester cette fonction avec les tableaux de votre choix.

Exercice 4

Ecrire une fonction qui calcule un prix TTC en se basant sur un prix HT. 
Définir la fonction et les paramètres nécessaires. Choisir des exemples pour tester cette fonction

Exercice 5

Ecrire une fonction qui prend en paramètre un tableau de mots, et qui affiche une phrase constituée de ces mots.

Exercice 6

Il faut écrire la fonction check_form. Celle-ci prend un tableau associatif en paramètre. Ce dernier contient les clés suivantes :

    nom
    prenom
    CP
    naissance
    banque

La fonction check_form doit vérifier que les données sont valides. Pour être valides les données doivent respecter les contraintes suivantes :

    Le nom doit exclusivement être composé des caractères de a à z, de - et (d'espace).
    Le prenom doit exclusivement être composé des caractères de a à z, de - et (d'espace).
    CP est une valeur numérique comprise entre 1000 et 9999.
    naissance doit être une date valide au format jour/mois/année.
    banque doit être un numéro de compte belge au format européen (eg. BE15 1234 5678 9012)

Pour vous aider dans la vérification des données vous pouvez utiliser les expressions régulières (voir fonction preg_match). Voici des expressions régulières pouvant vous aider :

    #^[A-Za-z -]*$# vérifie qu'une chaîne est composée des caractères de a à z, de - et (d'espace).
    #^[0-9]{1,2}/[0-9]{1,2}/[0-9]{1,4}$# vérifie qu'une chaine est au format xx/xx/xxxx où x est un nombre.
    #^BE[0-9]{2}( ?[0-9]{4}){3}$# vérifie qu'une chaîne correspond à un numéro de compte belge au format européen.

La fonction retournera un tableau associatif contenant les informations suivantes :

    valide valeur booléenne TRUE ou FALSE selon que toutes les données sont valides ou non
    nom
        valide valeur booléenne TRUE ou FALSE selon que les données dans nom sont valides ou non.
        message un message d'erreur relatif à nom si valide est FALSE.
    prenom
        valide valeur booléenne TRUE ou FALSE selon que les données dans prenom sont valides ou non.
        message un message d'erreur relatif à prenom si valide est FALSE.
    CP
        valide valeur booléenne TRUE ou FALSE selon que les données dans CP sont valides ou non.
        message un message d'erreur relatif à CP si valide est `FALSE
    naissance
        valide valeur booléenne TRUE ou FALSE selon que les données dans naissance sont valides ou non.
        message un message d'erreur relatif à naissance si valide est FALSE.
    banque
        valide valeur booléenne TRUE ou FALSE selon que les données dans banque sont valides ou non.
        message un message d'erreur relatif à banque si valide est FALSE.


Exercice 7

Il faut écrire une fonction distance qui prend les 4 paramètres suivants : $x1, $x2, $y1 et $y2. Ces paramètres représentent les coordonnées de deux points du plan. La fonction calculera et renverra la distance séparant ces deux points.

Formule :
<math class="tio-markdown_math"><mjx-container class="MathJax" jax="SVG" style="font-size: 110%; position: relative;"><svg style="vertical-align: -0.628ex;" xmlns="http://www.w3.org/2000/svg" width="24.857ex" height="2.851ex" role="img" focusable="false" viewBox="0 -982.5 10986.7 1260" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"><defs><path id="MJX-2-TEX-SO-221A" d="M263 249Q264 249 315 130T417 -108T470 -228L725 302Q981 837 982 839Q989 850 1001 850Q1008 850 1013 844T1020 832V826L741 243Q645 43 540 -176Q479 -303 469 -324T453 -348Q449 -350 436 -350L424 -349L315 -96Q206 156 205 156L171 130Q138 104 137 104L111 130L263 249Z"></path><path id="MJX-2-TEX-N-28" d="M94 250Q94 319 104 381T127 488T164 576T202 643T244 695T277 729T302 750H315H319Q333 750 333 741Q333 738 316 720T275 667T226 581T184 443T167 250T184 58T225 -81T274 -167T316 -220T333 -241Q333 -250 318 -250H315H302L274 -226Q180 -141 137 -14T94 250Z"></path><path id="MJX-2-TEX-I-1D465" d="M52 289Q59 331 106 386T222 442Q257 442 286 424T329 379Q371 442 430 442Q467 442 494 420T522 361Q522 332 508 314T481 292T458 288Q439 288 427 299T415 328Q415 374 465 391Q454 404 425 404Q412 404 406 402Q368 386 350 336Q290 115 290 78Q290 50 306 38T341 26Q378 26 414 59T463 140Q466 150 469 151T485 153H489Q504 153 504 145Q504 144 502 134Q486 77 440 33T333 -11Q263 -11 227 52Q186 -10 133 -10H127Q78 -10 57 16T35 71Q35 103 54 123T99 143Q142 143 142 101Q142 81 130 66T107 46T94 41L91 40Q91 39 97 36T113 29T132 26Q168 26 194 71Q203 87 217 139T245 247T261 313Q266 340 266 352Q266 380 251 392T217 404Q177 404 142 372T93 290Q91 281 88 280T72 278H58Q52 284 52 289Z"></path><path id="MJX-2-TEX-N-32" d="M109 429Q82 429 66 447T50 491Q50 562 103 614T235 666Q326 666 387 610T449 465Q449 422 429 383T381 315T301 241Q265 210 201 149L142 93L218 92Q375 92 385 97Q392 99 409 186V189H449V186Q448 183 436 95T421 3V0H50V19V31Q50 38 56 46T86 81Q115 113 136 137Q145 147 170 174T204 211T233 244T261 278T284 308T305 340T320 369T333 401T340 431T343 464Q343 527 309 573T212 619Q179 619 154 602T119 569T109 550Q109 549 114 549Q132 549 151 535T170 489Q170 464 154 447T109 429Z"></path><path id="MJX-2-TEX-N-2212" d="M84 237T84 250T98 270H679Q694 262 694 250T679 230H98Q84 237 84 250Z"></path><path id="MJX-2-TEX-N-31" d="M213 578L200 573Q186 568 160 563T102 556H83V602H102Q149 604 189 617T245 641T273 663Q275 666 285 666Q294 666 302 660V361L303 61Q310 54 315 52T339 48T401 46H427V0H416Q395 3 257 3Q121 3 100 0H88V46H114Q136 46 152 46T177 47T193 50T201 52T207 57T213 61V578Z"></path><path id="MJX-2-TEX-N-29" d="M60 749L64 750Q69 750 74 750H86L114 726Q208 641 251 514T294 250Q294 182 284 119T261 12T224 -76T186 -143T145 -194T113 -227T90 -246Q87 -249 86 -250H74Q66 -250 63 -250T58 -247T55 -238Q56 -237 66 -225Q221 -64 221 250T66 725Q56 737 55 738Q55 746 60 749Z"></path><path id="MJX-2-TEX-N-2B" d="M56 237T56 250T70 270H369V420L370 570Q380 583 389 583Q402 583 409 568V270H707Q722 262 722 250T707 230H409V-68Q401 -82 391 -82H389H387Q375 -82 369 -68V230H70Q56 237 56 250Z"></path><path id="MJX-2-TEX-I-1D466" d="M21 287Q21 301 36 335T84 406T158 442Q199 442 224 419T250 355Q248 336 247 334Q247 331 231 288T198 191T182 105Q182 62 196 45T238 27Q261 27 281 38T312 61T339 94Q339 95 344 114T358 173T377 247Q415 397 419 404Q432 431 462 431Q475 431 483 424T494 412T496 403Q496 390 447 193T391 -23Q363 -106 294 -155T156 -205Q111 -205 77 -183T43 -117Q43 -95 50 -80T69 -58T89 -48T106 -45Q150 -45 150 -87Q150 -107 138 -122T115 -142T102 -147L99 -148Q101 -153 118 -160T152 -167H160Q177 -167 186 -165Q219 -156 247 -127T290 -65T313 -9T321 21L315 17Q309 13 296 6T270 -6Q250 -11 231 -11Q185 -11 150 11T104 82Q103 89 103 113Q103 170 138 262T173 379Q173 380 173 381Q173 390 173 393T169 400T158 404H154Q131 404 112 385T82 344T65 302T57 280Q55 278 41 278H27Q21 284 21 287Z"></path></defs><g stroke="currentColor" fill="currentColor" stroke-width="0" transform="scale(1,-1)"><g data-mml-node="math"><g data-mml-node="msqrt"><g transform="translate(1020,0)"><g data-mml-node="mo"><use data-c="28" xlink:href="#MJX-2-TEX-N-28"></use></g><g data-mml-node="msub" transform="translate(389,0)"><g data-mml-node="mi"><use data-c="1D465" xlink:href="#MJX-2-TEX-I-1D465"></use></g><g data-mml-node="mn" transform="translate(605,-150) scale(0.707)"><use data-c="32" xlink:href="#MJX-2-TEX-N-32"></use></g></g><g data-mml-node="mo" transform="translate(1619.8,0)"><use data-c="2212" xlink:href="#MJX-2-TEX-N-2212"></use></g><g data-mml-node="msub" transform="translate(2620,0)"><g data-mml-node="mi"><use data-c="1D465" xlink:href="#MJX-2-TEX-I-1D465"></use></g><g data-mml-node="mn" transform="translate(605,-150) scale(0.707)"><use data-c="31" xlink:href="#MJX-2-TEX-N-31"></use></g></g><g data-mml-node="msup" transform="translate(3628.6,0)"><g data-mml-node="mo"><use data-c="29" xlink:href="#MJX-2-TEX-N-29"></use></g><g data-mml-node="mn" transform="translate(422,289) scale(0.707)"><use data-c="32" xlink:href="#MJX-2-TEX-N-32"></use></g></g><g data-mml-node="mo" transform="translate(4676.3,0)"><use data-c="2B" xlink:href="#MJX-2-TEX-N-2B"></use></g><g data-mml-node="mo" transform="translate(5676.5,0)"><use data-c="28" xlink:href="#MJX-2-TEX-N-28"></use></g><g data-mml-node="msub" transform="translate(6065.5,0)"><g data-mml-node="mi"><use data-c="1D466" xlink:href="#MJX-2-TEX-I-1D466"></use></g><g data-mml-node="mn" transform="translate(523,-150) scale(0.707)"><use data-c="32" xlink:href="#MJX-2-TEX-N-32"></use></g></g><g data-mml-node="mo" transform="translate(7214.3,0)"><use data-c="2212" xlink:href="#MJX-2-TEX-N-2212"></use></g><g data-mml-node="msub" transform="translate(8214.5,0)"><g data-mml-node="mi"><use data-c="1D466" xlink:href="#MJX-2-TEX-I-1D466"></use></g><g data-mml-node="mn" transform="translate(523,-150) scale(0.707)"><use data-c="31" xlink:href="#MJX-2-TEX-N-31"></use></g></g><g data-mml-node="msup" transform="translate(9141.1,0)"><g data-mml-node="mo"><use data-c="29" xlink:href="#MJX-2-TEX-N-29"></use></g><g data-mml-node="mn" transform="translate(422,289) scale(0.707)"><use data-c="32" xlink:href="#MJX-2-TEX-N-32"></use></g></g></g><g data-mml-node="mo" transform="translate(0,72.5)"><use data-c="221A" xlink:href="#MJX-2-TEX-SO-221A"></use></g><rect width="9966.7" height="60" x="1020" y="862.5"></rect></g></g></g></svg><mjx-assistive-mml unselectable="on" display="inline"><math xmlns="http://www.w3.org/1998/Math/MathML"><msqrt><mo stretchy="false">(</mo><msub><mi>x</mi><mn>2</mn></msub><mo>−</mo><msub><mi>x</mi><mn>1</mn></msub><msup><mo stretchy="false">)</mo><mn>2</mn></msup><mo>+</mo><mo stretchy="false">(</mo><msub><mi>y</mi><mn>2</mn></msub><mo>−</mo><msub><mi>y</mi><mn>1</mn></msub><msup><mo stretchy="false">)</mo><mn>2</mn></msup></msqrt></math></mjx-assistive-mml></mjx-container></math>

Exercice 8

Il faut écrire une fonction init_table permettant de générer un tableau de $n fois $m éléments rempli de valeurs aléatoires comprises entre $min et $max. La fonction retourne le tableau ainsi initialisé.

Il faut également écrire une fonction search_val permettant de compter les valeurs

    négatives (la valeur est dans la variable $nb_neg),
    positives (la valeur est dans la variable $nb_pos) et
    nulles (la valeur est dans la variable $nb_zero).

Les 3 valeurs seront renvoyées dans un tableau associatif. La clé pour chacune des valeurs sera :

    négatives nb_neg,
    positives nb_pos et
    nulles nb_zero.
