<?php 
function Bonjour ($nom) {
   return 'Bonjour' . $nom . "\n" ;
}
$salutations = Bonjour('Jean');
echo $salutations;