<?php

echo "<script>var jaexiste = false;</script>";
$senha_errada = 0;

if(isset($_POST['submit']))
{
    if(!isset($_POST['mensagem'])){
        $_POST['mensagem'] = 0;
    }

    include_once('config.php');

    $sandbox = $_POST['sandbox'];
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $apelido = $_POST['apelido'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $mensagem = $_POST['mensagem'];
    $retrato = rand(1,22);

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";

    $verifica = $conexao -> query($sql);

    if(mysqli_num_rows($verifica) !== 1 && $sandbox == $senha){

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,data_nascimento,apelido,email,senha,retrato,mensagem) VALUES ('$nome','$data_nascimento','$apelido','$email','$senha','$retrato','$mensagem')");

        $scripto = '<script>var jaexiste = false;</script>';
        echo $scripto;
    
        header('Location: index.php');
    }
    else if(mysqli_num_rows($verifica) == 1){
        echo "<script>var jaexiste = true;</script>";
    }
    elseif($sandbox !== $senha)
    {
        $senha_errada = 1;
    }
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
    <link rel="stylesheet" href="icones/style.css">
    <link rel="stylesheet" href="icones/outros_icones/style.css">
    <title>Cadastro | MagíCia</title>
</head>
<style>
    .aviso, .aviso-pass{
        background-color: red;
        color: white;
        border-radius: 0px 0px 10px 10px;
        position: absolute;
        top: -56px;
        left: 0;
        width: 100%;
        z-index: 10;
        padding: 10px;
    }

    .email-existe{
        animation: surgir 1s forwards linear;
    }

    @keyframes surgir {
        from{
            top: -56px;
        }
        to{
            top:0px;
        }
        
    }

    .icon-cross{
        font-size: 0.7em;
        font-weight: lighter;
        position: absolute;
        right: 10px;
        bottom: 4px;
    }
</style>
<body>
    <output id="saida" style="display: none;"><?php echo $senha_errada; ?></output>
    <div style="display: none;" id="aviso_senha"><p class="aviso-pass">A senha e o campo de confirmar senha não estavam iguais! <span class="icon-cross" id="fechar-aviso-senha"></span></p></div>

    <div style="display: none;" id="aviso_pai"><p class="aviso">Já existe uma conta ativa com esse e-mail, use outro! <span class="icon-cross" id="fechar-aviso"></span></p></div>

    <form action="cadastro.php" autocomplete="on" method="POST">
        <img src="images/favicon.png" alt="">
        <fieldset>
            <legend class="titulo">Cadastro</legend>

            <label for="inome">Nome</label>
            <input type="text" name="nome" id="inome" autocomplete="name" required placeholder="Nome" maxlength="40">

            <label for="idata">Data de Nascimento</label>
            <input type="date" name="data_nascimento" id="idata" required>

            <label for="iapelido">Apelido</label>
            <input type="text" required placeholder="Apelido" maxlength="20" name="apelido" id="iapelido">

            <label for="iemail">E-mail</label>
            <input type="email" name="email" id="iemail" autocomplete="email" required placeholder="E-mail">

            <label for="isandboxpasss">Senha</label>
            <input type="password" name="sandbox" id="isandboxpasss" required minlength="8" placeholder="Senha" maxlength="150">

            <label for="isenha">Confirmar senha</label>
            <input type="password" name="senha" id="isenha" required minlength="8" placeholder="Senha nova" maxlength="150">

            <label for="imsg" class="recado">Deseja receber novidades <br> no seu e-mail?</label>
            <input type="checkbox" name="mensagem" id="imsg" value="1">

        </fieldset>
        <input type="submit" value="Enviar" name="submit">
        <p class="recado final">Já tem uma conta?<br><a href="login_estrutura.php">faça login</a> agora mesmo.</p>
    </form>
    <script>

        const div_aviso = document.getElementById("aviso_pai");
        const div_aviso_senha = document.getElementById("aviso_senha");
        const aviso = document.querySelector('.aviso');
        const aviso_senha = document.querySelector('.aviso-pass');
        const fechar_aviso = document.getElementById("fechar-aviso");
        const fechar_aviso_senha = document.getElementById("fechar-aviso-senha");
        const output = document.getElementById("saida");

        if(jaexiste == true){
            aviso.classList.remove('email-existe');
            div_aviso.style.display = 'block';
            aviso.classList.add('email-existe');
            jaexiste = false;
        }

        fechar_aviso.addEventListener("click", fecha_aviso_men);

        function fecha_aviso_men(){
            div_aviso.style.display = 'none';
        }

        //---------- CONFIRMAR SENHA ---------------

        if(output.innerHTML == 1){
            aviso_senha.classList.remove('email-existe');
            div_aviso_senha.style.display = 'block';
            aviso_senha.classList.add('email-existe');
            output.innerHTML = 0;
        }

        fechar_aviso_senha.addEventListener("click", fecha_aviso_senhaa);

        function fecha_aviso_senhaa(){
            div_aviso_senha.style.display = 'none';
        }
    </script>
</body>
</html>