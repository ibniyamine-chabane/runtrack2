<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
/*Créez un cookie nommé “nbvisites”. A chaque fois que la page est visitée, ajoutez 1.
Afficher le contenu du cookie.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.*/


session_start();

setcookie('nbvisites', '0', time()+3600);

if (isset($_COOKIE['nbvisites'])) {
    $_COOKIE['nbvisites']++;
} else {
    $_COOKIE['nbvisites'] = 1;
}

echo $_COOKIE['nbvisites'];

if (isset($_POST['boutton'])) {
    $_COOKIE['nbvisites'] = 0;
    //session_destroy();    
}
var_dump($_COOKIE);    

?>
<form method="post">
    <input type="submit" name='boutton'>
</form>

</body>
</html>




