<?php
$note =(int)readline('Entrez votre note :');// int = nbre entier
if ($note >=10) {
    if ($note == 10) {
    echo 'Bravo vous avez juste la moyenne';
    }   elseif ($note === 10) {                     // a préférer a else tpujours utilisé le ===
    echo 'Bravo vous avez la moyenne';
    }   

} else {
    echo 'Dommage vous n\'avez la moyenne';
}