<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Menu do Sistema</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Menu Principal</h1>
    <p>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</p>
    <a href="logout.php">Sair</a>
</body>
</html>
