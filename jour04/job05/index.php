<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--Faire un formulaire de connexion de type POST (se demander, pourquoi pas GET ?)
ayant deux champs <input> nommés username et password.
Après validation du formulaire :
● si le username est “John” ET le password est “Rambo” afficher :
“C’est pas ma guerre”
● sinon afficher : “Votre pire cauchemar”.-->

<form method='post'>
    <label for='username'>username : </br></label>
    <input type='text' name='username'></br>
    <label for='password'>password : </label></br>
    <input type='text' name='password'>
    <input type='submit' value='Envoyer'>
</form>

<?php 
if ( isset($_POST['username']) && isset($_POST['password'])) {

    if ( $_POST['username'] == 'John' && $_POST['password'] == 'Rambo') {
    echo 'C\'est pas ma guerre';
    } else {
    echo 'Votre pire cauchemar';
    }
}

var_dump($_POST); // je laisse le var_dump exprès pour voir le contenu de $_POST sur la page.
?>

</body>
</html>