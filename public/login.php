<?php
session_start();
$erro = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'conexao.php';

    $nome = $_POST['nome'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $stmt = $conn->prepare("SELECT * FROM usuario WHERE nome = ? AND senha = ?");
    $stmt->bind_param("ss", $nome, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $_SESSION['usuario'] = $nome;
        header('Location: menu.php');
        exit();
    } else {
        $erro = "Usuário ou senha incorretos.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Login</h2>
    <?php if($erro) echo "<p style='color:red;'>$erro</p>"; ?>
    <form method="post">
        <label>Nome:</label>
        <input type="text" name="nome" required><br>
        <label>Senha:</label>
        <input type="password" name="senha" required><br>
        <button type="submit">Entrar</button>
    </form>
    <p><a href="index.php">Voltar para a tela inicial</a></p>
</body>
</html>
