<?php
$eleves = [
    'cm2' => ['Jean','Marc','Jane','Marion'],
    'cm1' => ['Emilie','Marcelins']
];

foreach ($eleves as $classe => $listEleves) {
    echo "La classe $classe: \n";
    foreach ($listEleves as $eleve) {
        echo " - $eleve\n";
    }
    echo "\n";
}