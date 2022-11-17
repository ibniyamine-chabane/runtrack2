<?php 
/*Développez un algorithme qui affiche le nombre d’arguments $_GET.
Tips :
Pour tester votre code, créez un formulaire html <form> de type GET avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
“Le nombre d’argument GET envoyé est : “*/

$i = 0;
   foreach ( $_GET as $value ) {
            $i++;
        }
        
                
      echo "<form method='get'>
                <label for='nom'>Quel est votre nom :<br/></label>
                <input type='text' name='nom' id='nom'>
                <label for='nom'><br/>Quel est votre prenom : <br/></label>
                <input type='text' name='prenom' id='prenom'>
                <label for='nom'><br/>Quel est votre age : <br/></label>
                <input type='text' name='age' id='age'><br/>
                <input type='submit' value='Envoyer'>
            </form>";

        echo "Le nombre d’argument GET envoyé est : $i";
        
       //var_dump($_GET);
?>