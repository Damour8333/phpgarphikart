<?php
$eleve = [
    'nom' => 'Doe',// mettre une clé pour dterminer la catégorie ici la clé c'est nom ça permet de mieux comprendre le code
    'prenom' => 'Marc',
    'notes' => [10, 20, ]
];
echo $eleve [ 'prenom' ] . ' ' . $eleve [ 'nom' ];//attention a la conquenétation pour les espaces 

$eleve['prenom'] = 'Jean';// pour donner une valeur a une clé je fais comme ça  par défault ça valeur est 0
$eleve[ 'notes'] [] = 16 ;// pour donner une  numerotation a une valeur chiffré je suis pas obligé de mettre une valeur entre crochet

$eleve['eleve'] [] = 'cm2-A';
print_r ($eleve);// ici on voit le resultat dans le terminal

$classes =[
    [ 'nom' => 'Doe',
    'prenom'=> 'Jean',
    'notes' => [12,20,15,16]],
    [ 'nom' => 'Doe',
    'prenom'=> 'Jane',
    'notes' => [10,3,16,15]]
];

echo $classes [1] [' notes' ] [1];


