<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 5 php</title>
    <style>
        .container{
            display: flex;
            justify-content: center;
            height: 40vh;
            font-size: 20pt;
        }
    </style>
</head>
<body>

<form method="GET">

    <h1>Digite o intervalo</h1>

    <label>Valor min:</label>
    <input type="number" name="min" value="<?php
        if(isset($_GET["min"])){
            echo $_GET["min"];
        }
    ?>">

    <br><br>

    <label>Valor max:</label>
    <input type="number" name="max" value="<?php
        if(isset($_GET["max"])){
            echo $_GET["max"];
        }
    ?>">

    <br><br>

    <input type="submit" value="Sortear">

</form>

<div class="container">

<?php

if(isset($_GET["min"]) && isset($_GET["max"])){

    $min = $_GET["min"];
    $max = $_GET["max"];

    if($min <= $max){
        echo "Número sorteado: " . rand($min, $max);
    }else{
        echo "O valor mínimo deve ser menor ou igual ao valor máximo.";
    }

}

?>

</div>

</body>
</html>