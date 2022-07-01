<?php
session_start();

$user_id = $_SESSION['user_id'];

$dsn = 'mysql:dbname=test;port=3307';
$pdo = new PDO($dsn, 'root','root');
$stmt = $pdo->query("
    select * from anuncios 
    where user_id = $user_id
    order by ano , titulo
");
$data = $stmt->fetchAll();

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
    <h1>Anúncios de <?= $_SESSION['name'] ?></h1>
    <a href="/logout.php">Sair</a>

    <table>
        <?php foreach ($data as $row): ?>
            <tr>
                <td><?= $row['titulo'] ?></td>
                <td><?= $row['ano'] ?></td>
                <td><?= $row['descricao'] ?></td>

                </td></tr>
        <?php endforeach ?>
    </table>

    <form action="save.php" method="POST">
        <fieldset>
            <legend>Adicionar  Anúncios</legend>
            <input type="text" name="titulo" placeholder="titulo">
            <input type="date" name="ano" placeholder="ano">
            <input type="text" name="descricao" placeholder="descricao">
            
            <input type="submit">
        </fieldset>
    </form>
</body>
</html>