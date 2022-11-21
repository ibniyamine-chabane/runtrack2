<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php 
        if (isset($_GET['css'])){
            echo $_GET['css'];
        }?>">
    <title>Document</title>
</head>
<body>

<div>
    <form method="get">
        <label for="css">Choisis ton style de CSS</label></br>
    <select id="css" name="css">
        <option value="style1.css">style1</option>
        <option value="style2.css">style2</option>
        <option value="style3.css">style3</option>
    </select>
    <input type="submit" value="Envoyer">
</div>    
<?php 
//var_dump($_GET);
?>
</form>    
</body>
</html>