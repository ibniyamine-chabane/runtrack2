<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Faire un formulaire de type GET avec un champ <input> text nommé “nombre” et un
    bouton submit.
    Après validation du formulaire :
    ● si la valeur entrée est un nombre pair, afficher “Nombre pair”,
    ● si c’est un nombre impair, afficher “Nombre impair”. -->

<form method="get">
    <input type="text" name='nombre'>
    <input type="submit" value='Envoyer'>
</form>
<?php

if ( isset($_GET['nombre'])) {
    if ( $_GET['nombre'] % 2 == 1) {
        echo 'Nombre impair';
    } else {
        echo 'C\'est un nombre pair';
    } 
}
var_dump($_GET);
?>
</body>
</html>