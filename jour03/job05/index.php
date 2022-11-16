<?php 
/* Créez une variable de type string nommée $str et affectez y le texte :
“On n’est pas le meilleur quand on le croit mais quand on le sait”.
Créez un dictionnaire (tableau keys/values) nommé $dic qui a comme keys
“consonnes” et “voyelles”. Créez un algorithme qui parcourt, compte et stocke le
nombre d'occurrences de consonnes et de voyelles de $str.
Affichez ces résultats dans un tableau <table> html qui a comme <thead> “Voyelles” et
“Consonnes”. */

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

$dic = [ "consonnes" , "voyelles"];

$i = 0;
$count_voyelles = 0;
$count_consonnes = 0;
    while (isset($str[$i])) {
        
        if ( $str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'O' || $str[$i] == 'u' 
        || $str[$i] == 'y' || $str[$i] == 'I') {

            $count_voyelles = $count_voyelles + 1;

        } else if ( $str[$i] == 'b' || $str[$i] == 'c' || $str[$i] == 'd' || $str[$i] == 'f' 
        || $str[$i] == 'g' || $str[$i] == 'h' || $str[$i] == 'j' || $str[$i] == 'k' || $str[$i] == 'l' 
        || $str[$i] == 'm' || $str[$i] == 'n' || $str[$i] == 'p' || $str[$i] == 'q' || $str[$i] == 'r' 
        || $str[$i] == 's' || $str[$i] == 't' || $str[$i] == 'v' || $str[$i] == 'w' || $str[$i] == 'x' || $str[$i] == 'z') {

            $count_consonnes = $count_consonnes + 1;

        }

        $i++;

    }

    echo    "<table style='border-style:solid'>
             <thead>
                <th style='border:1px solid'>$dic[0]</th>
                <th style='border:1px solid'>$dic[1]</th>             
              </thead> 
              <tbody>
                <tr style='border-style:solid'>
                    <td style='border:1px solid'>$count_consonnes</td>
                    <td style='border:1px solid'>$count_voyelles</td>
                </tr>
              </tbody>    
            </table>"

?>