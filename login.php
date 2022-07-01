<?php
    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // $fp = fopen('users.csv', 'r');
    // $data = [];
    // while ($row = fgets($fp)) {
    //     $data[] = explode(',', trim($row));
    // }

    $dsn = 'mysql:dbname=test;port=3307';
    $pdo = new PDO($dsn, 'root', 'root');
    $stmt = $pdo->query('select * from users');
    $data = $stmt->fetchAll();


    foreach($data as $row) {
        if ($row['email'] == $email && $row['senha'] == $senha) {
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $row['nome'];
            $_SESSION['user_id'] = $row['id'];

            header('location: home.php');
            exit();
        }
    }
    //header('location: index.php?msg=usuario_ou_senha_invalido')
?>