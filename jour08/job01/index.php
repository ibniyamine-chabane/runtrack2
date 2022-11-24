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
/*Créez une variable de session nommée “nbvisites”. A chaque fois que la page est
visitée, ajoutez 1. Afficher le contenu de cette variable.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.*/


session_start();

    if (isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites']++;
    } else {
        $_SESSION['nbvisites'] = 1;
    }

    
    if (isset($_POST['boutton'])) {
        $_SESSION['nbvisites'] = 0;
        //session_destroy();
        
    }
    echo $_SESSION['nbvisites'];
    var_dump($_POST);    

?>
<form method="post">
    <input type="submit" name='boutton'>
</form>

</body>
</html>




