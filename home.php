<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('location:index.php?msg=nao_autorizado');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome</h1>
    <a href="logout.php">sair</a>
    <a href="livros/index.php">Ver meus livros</a>
</body>
</html>
