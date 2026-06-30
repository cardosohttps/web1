<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 7</title>
    <style>
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh;
            font-size: 30pt
        }
    </style>
</head>
<body>
<form method="GET">
    <h1>Digite o numero:</h1>
    <label for="inputa">Valor</label>
    <input type="text" id="inputa" name="a" value="<?php
        if(isset($_GET["a"])){
            echo $_GET["a"];
        }
    ?>">
    <br>
    <input type="submit" value="Enviar">
</form>
<div class="container">
    <?php
    if(!isset($_GET["a"])){
        exit;
    }
    elseif(trim($_GET["a"])==""){
        exit;
    }
    $a=$_GET["a"];
    for($i = 1; $i<=10; $i++){
        $result = $a*$i;
        echo "$a * $i = $result <br>";
    }
    ?>
</div>
</body>
</html>