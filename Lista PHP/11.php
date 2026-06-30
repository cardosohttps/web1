<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intervalo de Números</title>

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
            padding: 10px;
            width: 120px;
            margin: 8px;
        }

        button {
            padding: 10px 20px;
            cursor: pointer;
        }

        .numero-intervalo {
            display: inline-block;
            background-color: #d9ecff;
            color: #123b63;
            padding: 8px 12px;
            margin: 5px;
            border-radius: 6px;
            font-weight: bold;
        }

        .erro {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Números de um intervalo</h1>

        <form method="POST">
            <input 
                type="number" 
                name="numeroInicial" 
                placeholder="Número inicial"
                required
            >

            <input 
                type="number" 
                name="numeroFinal" 
                placeholder="Número final"
                required
            >

            <br>

            <button type="submit">Exibir números</button>
        </form>

        <hr>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numeroInicial = filter_input(INPUT_POST, "numeroInicial", FILTER_VALIDATE_INT);
                $numeroFinal = filter_input(INPUT_POST, "numeroFinal", FILTER_VALIDATE_INT);

                if ($numeroInicial === false || $numeroFinal === false) {
                    echo "<p class='erro'>Digite dois números inteiros válidos.</p>";
                } else {
                    if ($numeroInicial > $numeroFinal) {
                        $temporario = $numeroInicial;
                        $numeroInicial = $numeroFinal;
                        $numeroFinal = $temporario;
                    }

                    echo "<h2>Resultado:</h2>";

                    for ($i = $numeroInicial; $i <= $numeroFinal; $i++) {
                        echo "<span class='numero-intervalo'>" . $i . "</span>";
                    }
                }
            }
        ?>
    </div>
</body>
</html>