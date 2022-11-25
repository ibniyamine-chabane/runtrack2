<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>table {border: 1px solid black;} th, td {padding: 10px;border: 1px solid black;}</style>
    <title>Document</title>
</head>
<body>    
        <table>
            <thead>
                <th>Prénom</th>
                <th>nom</th>
                <th>naissance</th>
                <th>Sexe</th>
                <th>Email</th>
            </thead>
            <tbody>
            <?php

$mysqli = new mysqli("localhost", "root", "", "jour09",3307);
$request = $mysqli->query("SELECT * FROM etudiants");
$display_Fetch_All = $request->fetch_all();

var_dump($display_Fetch_All);
    
    for ($ligne = 0; $ligne < 7  ; $ligne++) { 
            echo "<tr>";
        for ($col=1; $col < 6 ; $col++) { 
            echo '<td>' .$display_Fetch_All[$ligne][$col]. '</td>';
        }
        echo "</tr>";
    }       ?>
            </tbody>
        </table>    
</body>
</html>