<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('location:index.php?msg=nao_autorizado');
    exit();
} 
function is_logged() {
    return isset($_SESSION['user_id']);
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mtmp</title>

</head>
<body>
<h1>
        Anúncios
    </h1>
    <?php if(is_logged()):?> 
<?php
$user_id = $_SESSION['user_id'];

$dsn = 'mysql:dbname=test;port=3307';
$pdo = new PDO($dsn, 'root','root');
$stmt = $pdo->query("
    select * from anuncios 
    where user_id != $user_id
    order by ano , titulo
");
$data = $stmt->fetchAll();
?> 
<table>
        <?php foreach ($data as $row): ?>
            <tr>
                <td><?= $row['titulo'] ?></td>
                <td><?= $row['ano'] ?></td>
                <td><?= $row['descricao'] ?></td>

                </td></tr>
        <?php endforeach ?>
    </table>
   
<!--
    <a href="logout.php">sair</a>
    <a href="livros/index.php">Ver meus Anúncios </a>
     -->

    <?php endif ?>

    <header> 
        <ul>
            <li>
                <a href="home.php"> 
            <span class="icon"></span> 
            <span class="icon">Home</span> 
            </li> 

            <li>
                <a href="#"> 
            <span class="icon"></span> 
            <span class="icon">Usuario</span> 
            </li> 

            <li>
                <a href="livros/index.php"> 
            <span class="icon"></span> 
            <span class="icon">Meus Anúncios</span> 
            </li>

    
            <li>
                <a href="logout.php"> 
            <span class="icon"></span> 
            <span class="icon">Sair</span> 
            </li>

        
        </ul>
    </header>
<style>
    header{ 
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
   
}
    

</style> 




</body>
</html>