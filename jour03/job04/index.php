<?php 

/*Créez une variable de type string nommée $str et affectez y le texte :
“Dans l'espace, personne ne vous entend crier”.
Créez un algorithme qui parcourt, compte et affiche le nombre de caractères présents
dans cette chaîne.
*/

$str = "Dans l'espace, personne ne vous entend crier";

$i = 0;
$count = 0;
    while (isset($str[$i])){
        if (isset($str[$i]) == 1) {
        $count = $count + 1;
    }
        $i++;
        
    }
/*

ou bien 
$i= 0 ; 
while (isset($str[$i])){ 
    $i++
}

echo $i;

*/
?>