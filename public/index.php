<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header('Location: menu.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sistema PHP + Docker</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Bem-vindo ao Sistema PHP + Docker</h1>
    <form action="login.php" method="post">
        <button type="submit">Logar</button>
    </form>
</body>
</html>
