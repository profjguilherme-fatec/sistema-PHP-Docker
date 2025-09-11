<?php
$conn = new mysqli('db', 'root', 'minhaSenhaSegura', 'sistemaphp');
if ($conn->connect_error) {
    die("Erro na conexão com o MySQL: " . $conn->connect_error);
}
?>
