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
    <?php if(is_logged()): ?>
    <h1>
        Anúncios
    </h1>
    
   
    <a href="logout.php">sair</a>
    <a href="livros/index.php">Ver meus Anúncios </a>
    <?php endif ?>
</body>

</html>