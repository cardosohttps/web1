```php
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificação de Triângulo</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            padding: 40px;
        }

        .container {
            background-color: white;
            max-width: 500px;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
        }

        input {
            width: 180px;
            padding: 10px;
            margin: 8px;
        }

        button {
            padding: 10px 20px;
            cursor: pointer;
        }

        .resultado {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }

        .erro {
            color: red;
        }

        .sucesso {
            color: green;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Classificador de Triângulo</h1>

        <form method="POST">
            <input
                type="number"
                name="lado1"
                step="0.1"
                placeholder="Primeiro lado"
                required
            >

            <input
                type="number"
                name="lado2"
                step="0.1"
                placeholder="Segundo lado"
                required
            >

            <input
                type="number"
                name="lado3"
                step="0.1"
                placeholder="Terceiro lado"
                required
            >

            <br>

            <button type="submit">Classificar</button>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $lado1 = (float) $_POST["lado1"];
                $lado2 = (float) $_POST["lado2"];
                $lado3 = (float) $_POST["lado3"];

                if ($lado1 <= 0 || $lado2 <= 0 || $lado3 <= 0) {
                    echo "<p class='resultado erro'>Os lados devem possuir valores maiores que zero.</p>";
                } elseif (
                    $lado1 + $lado2 > $lado3 &&
                    $lado1 + $lado3 > $lado2 &&
                    $lado2 + $lado3 > $lado1
                ) {
                    if ($lado1 == $lado2 && $lado2 == $lado3) {
                        $tipo = "Equilátero: todos os lados são iguais.";
                    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
                        $tipo = "Isósceles: possui dois lados iguais.";
                    } else {
                        $tipo = "Escaleno: todos os lados são diferentes.";
                    }

                    echo "<p class='resultado sucesso'>Os valores formam um triângulo.<br>$tipo</p>";
                } else {
                    echo "<p class='resultado erro'>Os valores informados não podem formar um triângulo.</p>";
                }
            }
        ?>
    </div>
</body>
</html>
```
