<?php 

/*Créez une variable de type string nommée $str et affectez y le texte :
“Les choses que l'on possède finissent par nous posséder."
Créez un algorithme qui parcourt et écrit cette chaine à l’envers.
Ex. : redessop suon rap tnessinif edessop no'l euq sesohc seL*/

$str = "Les choses que l'on possède finissent par nous posséder";

$i= -1;

   while(isset($str[$i])) {
        echo $str[$i];
        $i--;
   }

?>