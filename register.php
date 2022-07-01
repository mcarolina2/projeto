<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mtmp</title>
</head>
<body>
    
    <form action="save-user.php" method="POST">
    <div class="container-inscricao">
    <h1>Primeiro Acesso</h1>
    <div class="inscricao">    
    <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="senha" placeholder="Senha"> 
        <input type="text" name="cpf" placeholder="CPF">
        <input type="text" name="telefone" placeholder="Telefone">
        <input type="date" name="datadenascimento" placeholder="Data De Nascimento">
        <input type="text" name="cep" placeholder="CEP">
       
</form>
    </div>
        <input type="submit" class="button-inscricao">
        </div>
    </form>
    <style>
    .section-inscricao {
    display: flex;
    align-items: center;
}

.container-inscricao{
    display: flex;
    flex-direction: column;
    align-items: center;
}


.inscricao {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
}

.inscricao-nome, .inscricao-email, .inscricao-senha, .inscricao-cpf ,.inscricao-codigoregistro {
    margin: 20px;
    border-radius: 8px;
    width: 30rem;
}

.button-inscricao {
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 6px;
    width: 15rem;
    height: 2.1rem;
    margin: 10px;
    background: #4F4F4F;
    color: #F8F8FF;
    font-size: 1rem;
    font-family: 'Merriweather', serif;
}
</style>
</body>
</html>