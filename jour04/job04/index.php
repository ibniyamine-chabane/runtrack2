<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!--Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
    arguments $_ POST et les valeurs associées. Il doit y avoir deux colonnes : argument et
    valeur.
    Tips :
    Pour tester votre code, créez un formulaire html <form> de type POST avec différents
    champs <input> de type “text” et un <input> de type “submit” pour l’envoi.-->

<form method='post'>
    <label for='nom'>Quel est votre nom :<br/></label>
    <input type='text' name='nom' id='nom'>
    <label for='nom'><br/>Quel est votre prenom : <br/></label>
    <input type='text' name='prenom' id='prenom'></br>
    <input type='submit' value='Envoyer'>
</form>

<table style='border: 1px solid'>
    <thead>
        <th style='border: 1px solid'>arguments</th>
        <th style='border: 1px solid'>valeur</th>
    </thead>
    <tbody>
        <?php 
            foreach ( $_POST as $key => $value) { 
                echo "<tr>
                        <td style='border:1px solid'>$key</td>
                        <td style='border:1px solid'>$value</td>
                     </tr>";
             }    //boucle pour créer la ligne de la clé et valeur selon la longeur du tableau ici c'est nom et prenom.
             var_dump($_POST);  //Je laisse le var_dump pour avoir une vu sur le contenu de $_POST.
        ?>
    </tbody>
</table>

</body>
</html>



