<?php 

$i = 0;
   foreach ( $_POST as $value ) {
            $i++;
        }
        
                
      echo "<form method='post'>
                <label for='nom'>Quel est votre nom :<br/></label>
                <input type='text' name='nom' id='nom'>
                <label for='nom'><br/>Quel est votre prenom : <br/></label>
                <input type='text' name='prenom' id='prenom'>
                <label for='nom'><br/>Quel est votre age : <br/></label>
                <input type='text' name='age' id='age'><br/>
                <input type='submit' value='Envoyer'>
            </form>";

        echo "Le nombre d’argument POST envoyé est : $i";
        
        echo var_dump($_POST);





?>