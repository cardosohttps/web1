
<?php
session_start();

$usuarioCorreto = "admin";
$senhaCorreta = "1234";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if ($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
        $_SESSION["usuario"] = $usuario;
    } else {
        header("Location: index.php?erro=1");
        exit;
    }
}

if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>
<body>

    <h1>Página Principal</h1>

    <p>
        Você está logado como:
        <?php echo $_SESSION["usuario"]; ?>
    </p>

    <a href="logout.php">Encerrar sessão</a>

</body>
</html>
