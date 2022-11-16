<?php 
/*Créez une variable de type string nommée $str et affectez y le texte :
“I'm sorry Dave I'm afraid I can't do that”.
Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles.
Ex. : IoyaeIaaiIaoa*/

$str = "I'm sorry Dave I'm afraid I can't do that";

$i = 0;

    while (isset($str[$i])) {
        
        if ( $str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u' || $str[$i] == 'y' || $str[$i] == 'I') {
        echo $str[$i];
        } 
        $i++;
    }




?>