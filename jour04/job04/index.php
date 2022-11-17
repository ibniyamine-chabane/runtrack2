<?php

/*Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
arguments $_ POST et les valeurs associées. Il doit y avoir deux colonnes : argument et
valeur.
Tips :
Pour tester votre code, créez un formulaire html <form> de type POST avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.*/

foreach ( $_POST as $key => $value) {
        echo $key.'<br/>';
        }


        echo  "<form method='post'>
                  <label for='nom'>Quel est votre nom :<br/></label>
                  <input type='text' name='nom' id='nom'>
                  <label for='nom'><br/>Quel est votre prenom : <br/></label>
                  <input type='text' name='prenom' id='prenom'>
                  <input type='submit' value='Envoyer'>
              </form>";

           


      echo "<table style='border: 1px solid'>
              <thead>
                  <th style='border: 1px solid'>arguments</th>
                  <th style='border: 1px solid'>valeur</th>
              </thead>
              <tbody>"
              foreach ( $_POST as $key => $value) {
                echo '<tr>
                        <td>'.$key'</td>;
                        <td>'.$value'</td>; //boucle pour créer la ligne de la clé et valeur
                    </tr>'
              }
              "</tbody>
          </table>";

          var_dump($_POST);


?>