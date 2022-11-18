<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Faire un formulaire avec deux <input> de type text ayant comme nom “largeur” et
“hauteur” et un bouton submit.
Vous devez créer un algorithme qui affiche, à la validation du formulaire,
une maison telle que : -->

<form method="get">
    <input type='text' name='largeur' placeholder='largeur'></br>
    <input type='text' name='hauteur' placeholder='hauteur'></br>
    <input type="submit" value='Envoyer'>
</form>
<?php

foreach ($_GET as $key => $value) {
    for ( $i = 0; $i < $_GET['largeur'] ; $i++) {
        echo '_ ';
    }
    for ( $i = 0; $i < $_GET['hauteur'] ; $i++) {
        echo '|</br>';
    }
     
}


var_dump($_GET);
?>
</body>
</html>