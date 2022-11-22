<?php 

/*Créez une fonction nommée “calcule()” qui prend 3 paramètres :
● le premier, “$a”, est un nombre,
● le deuxième, "$operation", est un caractère (string) contenant le type d’opération
(+, -, *, /, %),
● le troisième, “$b”, est un nombre.
La fonction doit retourner le résultat de l’opération.*/


function calcule($a,$operation,$b) {
    if ($operation == "+"){
        $result = $a + $b;
        return $result;
    } elseif ($operation == "-"){
        $result = $a - $b;
        return $result;       
    } elseif ($operation == "*"){
        $result = $a * $b;
        return $result;        
    } elseif ($operation == "/"){
        $result = $a / $b;
        return $result;        
    } elseif ($operation == "%"){
        $result = $a % $b;
        return $result;        
    } 
    //return $result;
}


echo calcule(10,"+",5). '</br>';
echo calcule(16,"-",2). '</br>';
echo calcule(2,"*",2). '</br>';
echo calcule(10,"/",2). '</br>';
echo calcule(5,"%",2). '</br>';

?>