<?php 

$contenu = $_GET;
$i = 0;

while (isset($contenu[$i])){ 
    $i++;
}

/*foreach ($contenu as $arg) {
    echo "$contenu[$i] => $arg";
    $i++;
}
    
*/


    echo "<form method='get'>
            <label for='nom'>Quel est votre nom :<br/></label>
            <input type='text' name='nom' id='nom'>
            <label for='nom'><br/>Quel est votre prenom : <br/></label>
            <input type='text' name='prenom' id='prenom'>
            <label for='nom'><br/>Quel est votre age : <br/></label>
            <input type='text' name='age' id='age'><br/>
            <input type='submit' value='Envoyer'>
        </form>";

        echo 'Le nombre d’argument GET envoyé est :'.$i;
        
        var_dump($contenu);
?>