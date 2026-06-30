<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palíndromo</title>
</head>

<body>

<h1>Verificador de Palíndromo</h1>

<form method="GET">
    <label for="texto">Digite um texto:</label>
    <input type="text" id="texto" name="texto" required>
    <button type="submit">Calcular</button>
</form>

<?php

if (isset($_GET["texto"]) && $_GET["texto"] !== "") {

    $texto = $_GET["texto"];
    $textoLimpo = strtolower(str_replace(" ", "", $texto));

    $tamanho = strlen($textoLimpo);

    $palindromo = ($textoLimpo == strrev($textoLimpo)) ? "Sim" : "Não";

    $vogais = preg_match_all('/[aeiouAEIOU]/', $texto);

    $consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/', $texto);

    echo "<h2>Resultado:</h2>";
    echo "<ul>";
    echo "<li>Texto: $texto</li>";
    echo "<li>Tamanho da String: $tamanho</li>";
    echo "<li>É um palíndromo: $palindromo</li>";
    echo "<li>Número de vogais: $vogais</li>";
    echo "<li>Número de consoantes: $consoantes</li>";
    echo "</ul>";
}

?>

</body>
</html>