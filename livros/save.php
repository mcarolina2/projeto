<?php
session_start();

$titulo = $_POST['titulo'];
$ano = $_POST['ano'];
$descricao = $_POST['descricao'];
$user_id = $_SESSION['user_id'];

$dsn = 'mysql:dbname=test;port=3307';
$pdo = new PDO($dsn, 'root', 'root');
$stmt = $pdo->query("
    INSERT INTO anuncios (titulo, ano, descricao, user_id)
    VALUES ('$titulo', '$ano', '$descricao' , '$user_id')
");

header('location: index.php');
?>