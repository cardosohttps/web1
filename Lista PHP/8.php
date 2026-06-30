<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>exercicio 8</title>
</head>
<body>
    <h1>Soma de números</h1>

    <form method="get">
        <input type="text" id="numeros" name="numeros">
        <button type="submit">Somar</button>
    </form>

    <?php
    if (isset($_GET["numeros"])) {
        $entrada = $_GET["numeros"] ?? "";
        $valores = explode(",", $entrada);
        $soma = 0;

        foreach ($valores as $valor) {
            $soma += (float) trim($valor);
        }

        echo "<p>A soma é: $soma</p>";
    }
    ?>
</body>
</html>