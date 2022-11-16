<?php 

$tab = [200,204,173,98,171,404,459];

    
    for ($x = 0; $x <= 6; $x++) {
        $reste = $tab[$x]%2;
        
        if ( $reste == 1 ) {
            echo $tab[$x] .' est impaire <br/>';
        } else {
            echo $tab[$x] .' est paire <br/>';
        }

    }


?>