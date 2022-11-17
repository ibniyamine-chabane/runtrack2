<?php 
/*Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
arguments $_GET et les valeurs associées.
Il doit y avoir deux colonnes : argument et valeur.
Tips :
Pour tester votre code, créez un formulaire html <form> de type GET avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple ce
tableau :*/

  foreach ( $_GET as $key => $value) {
        
  }



        echo  "<form method='get'>
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
                <tbody>
                    <tr>
                        <td style='border: 1px solid'>$key</td>   //ne lit que le premier tour de la boucle.
                        <td style='border: 1px solid'>$value</td>
                    </tr>
                </tbody>
            </table>";

var_dump($_GET); /*Je laisse le var_dump($_GET) pour avoir une vu sur le contenu de $_GET avant et après que
le formulaire soit soumis.*/

//le code envoie des une 2 erreur dans la la ligne 33 et 34 car $_GET est vide de base
//il faut donc remplir le formulaire afin que celui ci ne soit plus video et affiche la clé avec $key et la valeur avec $value

?>