<?php 

/*Créez une fonction nommée “getHello()”.
Cette fonction doit retourner “Hello LaPlateforme!”.
Appelez cette fonction dans votre page en récupérant sa valeur de retour et affichez-la.*/


function getHello(){
    
    return "Hello LaPlateforme!"; 
}

$salut = getHello();
echo $salut;
var_dump($salut);

?>
