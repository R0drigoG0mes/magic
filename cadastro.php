<?php

if(isset($_POST['submit']))
{

    include_once('config.php');

    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $apelido = $_POST['apelido'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $mensagem = $_POST['mensagem'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,data_nascimento,apelido,email,senha,mensagem) VALUES ('$nome','$data_nascimento','$apelido','$email','$senha','mensagem')");
    
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="keywords" content="Cadastrar-se no MagíCia, Cadastrar no MagíCia, Cadastro MagiCia, Cadastro, cadastro, Criar conta, cadastrar-se">
    <meta name="description" content="Crie sua conta no jogo MagíCia">
    <meta name="author" content="Rodrigo Gomes Cordeiro">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <title>Cadastro | MagíCia</title>
</head>
<body>
    <form action="cadastro.php" autocomplete="on" method="POST">
        <img src="images/favicon.png" alt="">
        <fieldset>
            <legend class="titulo">Cadastro</legend>

            <label for="inome">Nome</label>
            <input type="text" name="nome" id="inome" autocomplete="name" required placeholder="Nome">

            <label for="idata">Data de Nascimento</label>
            <input type="date" name="data_nascimento" id="idata" required>

            <label for="iapelido">Apelido</label>
            <input type="text" required placeholder="Apelido" maxlength="100" name="apelido">

            <label for="iemail">E-mail</label>
            <input type="email" name="email" id="iemail" autocomplete="email" required placeholder="E-mail">

            <label for="isandboxpasss">Senha</label>
            <input type="password" name="" id="isandboxpasss" required minlength="8" placeholder="Senha">

            <label for="isenha">Confirmar senha</label>
            <input type="password" name="senha" id="isenha" required minlength="8" placeholder="Senha nova" maxlength="150">

            <label for="imsg" class="recado">Deseja receber novidades <br> no seu e-mail?</label>
            <input type="checkbox" name="mensagem" id="imsg">

        </fieldset>
        <input type="submit" value="Enviar" name="submit">
        <p class="recado final">Já tem uma conta?<br><a href="login.html">faça login</a> agora mesmo.</p>
    </form>
</body>
</html>