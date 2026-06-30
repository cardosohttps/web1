<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 6 php</title>
        <style>
            .container{
                display: flex;
                justify-content: center;
                height: 100vh;
                font-size: 20pt
            }
        </style>
    </head>
<body>
<form method="GET">
    <h1>Digite o numero:</h1>
    <label for="input">Valor</label>
    <input type="text" id="input" name="a" value="<?php
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
    if($a%2==0){
        echo "$a é par!";
    }
    else{
        echo "$a é impar";
    }
    ?>
</div>
</body>
</html>