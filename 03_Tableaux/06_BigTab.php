<?php

$tab = ["Portugal"
,"Croatia"
,"Thailand"
,"Poland"
,"Chad"
,"Indonesia"
,"Poland"
,"French Polynesia"
,"Greece"
,"Vietnam"
,"Haiti"
,"Brazil"
,"Peru"
,"Saint Pierre and Miquelon"
,"China"
,"China"
,"Indonesia"
,"Croatia"
,"China"
,"Philippines"
,"Indonesia"
,"Afghanistan"
,"Indonesia"
,"Indonesia"
,"Japan"
,"Brazil"
,"Indonesia"
,"China"
,"China"
,"El Salvador"
,"Ukraine"
,"Sweden"
,"Philippines"
,"China"
,"France"
,"China"
,"Russia"
,"Canada"
,"Ethiopia"
,"Honduras"
,"Russia"
,"Nigeria"
,"Mexico"
,"Indonesia"
,"Liberia"
,"China"
,"China"
,"Philippines"
,"Indonesia"
,"Poland"
,"Philippines"
,"Argentina"
,"Belarus"
,"Nigeria"
,"Indonesia"
,"China"
,"Ukraine"
,"Indonesia"
,"Poland"
,"Colombia"
,"Ukraine"
,"Reunion"
,"Pakistan"
,"Brazil"
,"Indonesia"
,"China"
,"Venezuela"
,"Mexico"
,"Colombia"
,"China"
,"China"
,"China"
,"Tajikistan"
,"Greece"
,"China"
,"China"
,"Jordan"
,"Colombia"
,"France"
,"Russia"
,"Indonesia"
,"China"
,"Portugal"
,"South Korea"
,"China"
,"Azerbaijan"
,"China"
,"Brazil"
,"France"
,"China"
,"Indonesia"
,"Vietnam"
,"China"
,"China"
,"Sweden"
,"Philippines"
,"China"
,"China"
,"Portugal"
,"Czech Republic"];

// Longueur ?
echo "Le tableau contient " . count($tab) . " cases \n";

// Accès à une case particulière ?
echo "La case 59 est " . $tab[58] . "\n";

// Accès à une case particulière ?
echo "La case 32 est " . strtoupper($tab[31]) . "\n";

// Ajoute un pays (ajoute une case)
$tab[] = "France";

// Longueur ?
echo "Le tableau contient " . count($tab) . " cases \n";

// Parcourir le tableau
for ( $i=0; $i < count($tab); $i++)
{
    echo "La case $i vaut $tab[$i]\n";
}

// Parcourir le tableau à l'envers
for ( $i=count($tab); $i>0; $i--)
{
    echo "La case $i vaut $tab[$i]\n";
}


// Indice de début et de fin
echo "Un indice de début: \n";
$indiceDebut = readline();
echo "Un indice de fin: \n";
$indiceFin = readline();

for ($i = $indiceDebut; $i != $indiceFin; $i++){
    echo "La case $i vaut $tab[$i]\n";
}