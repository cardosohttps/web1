//CREATE DATABASE cadastro_db;

USE cadastro_db;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL
);\\
<?php
$servidor = "localhost";
$usuarioBanco = "root";
$senhaBanco = "";
$banco = "cadastro_db";

$conexao = new mysqli($servidor, $usuarioBanco, $senhaBanco, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    $sql = "INSERT INTO usuarios (nome, email, telefone) VALUES (?, ?, ?)";

    $comando = $conexao->prepare($sql);
    $comando->bind_param("sss", $nome, $email, $telefone);

    if ($comando->execute()) {
        $mensagem = "Usuário cadastrado com sucesso!";
    } else {
        $mensagem = "Erro ao cadastrar usuário: " . $comando->error;
    }

    $comando->close();
}

$conexao->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
</head>
<body>

    <h1>Cadastro de Usuários</h1>

    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <br><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required>

        <br><br>

        <button type="submit">Cadastrar</button>
    </form>

    <p><?php echo $mensagem; ?></p>

</body>
</html>

