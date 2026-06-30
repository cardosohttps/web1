
<?php
session_start();

if (isset($_SESSION["usuario"])) {
    header("Location: 14b.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>

    <?php
        if (isset($_GET["erro"])) {
            echo "<p>Usuário ou senha inválidos.</p>";
        }
    ?>

    <form action="principal.php" method="POST">
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" required>

        <br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <br><br>

        <button type="submit">Entrar</button>
    </form>

</body>
</html>

