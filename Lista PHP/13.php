
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array de Números</title>
</head>
<body>

    <h1>Resultado do Array</h1>

    <?php
        $numeros = [10, 25, 8, 42, 15, 3];

        $soma = array_sum($numeros);
        $maior = max($numeros);
        $menor = min($numeros);

        echo "<p>Números do array: " . implode(", ", $numeros) . "</p>";
        echo "<p>Soma de todos os números: " . $soma . "</p>";
        echo "<p>Maior número: " . $maior . "</p>";
        echo "<p>Menor número: " . $menor . "</p>";
    ?>

</body>
</html>


