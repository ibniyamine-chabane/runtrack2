
<?php 

/*Créez une variable de type string nommée $str et affectez y le texte :
“Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.”
Parcourir cette chaîne en affichant seulement un caractère sur deux.
Ex. : Tu e ntnssrn edsdn etmscmelslre osl li.*/

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie";
   
   $i=0;

   while(isset($str[$i])) {
        echo $str[$i++];
        $i++;
   }

?>