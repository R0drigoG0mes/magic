<?php

session_start();
$conta_inexistente = 0;

if(isset($_POST['submit']) && !empty($_POST['email'] && !empty($_POST['senha'])))
{
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

    $result = $conexao -> query($sql);

    // print_r($result);

    if(mysqli_num_rows($result) < 1){
        session_unset();
        $conta_inexistente = 1;
    }
    else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: index.php');
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="keywords" content="Logar no MagíCia, Logar no MagíCia, Login MagiCia, Login, login, Entrar, entrar">
    <meta name="description" content="Crie sua conta no jogo MagíCia">
    <meta name="author" content="Rodrigo Gomes Cordeiro">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="icones/style.css">
    <link rel="stylesheet" href="icones/outros_icones/style.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <title>Login | MagíCia</title>
</head>
<style>
    .aviso_inexiste{
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

    .conta-existe{
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
    <ouput id="saidinha" style="display: none;"><?php echo $conta_inexistente; ?></ouput>
    <div id="aviso_conta_pai" style="display: none;"><p class="aviso_inexiste">Essa conta não existe! <span class="icon-cross" id="fechar"></span></p></div>
    <img src="images/favicon.png" alt="">
    <form action="login_estrutura.php" autocomplete="on" method="POST">
        <fieldset>
            <legend class="titulo">Login</legend>
            <label for="iemail">E-mail</label>
            <input type="email" name="email" id="iemail" autocomplete="email" required placeholder="E-mail">
            <label for="isenha">Senha</label>
            <input type="password" name="senha" id="isenha" required minlength="8" placeholder="Senha">
        </fieldset>
        <input type="submit" value="Login" name="submit">
    </form>
    <p class="recado">Não tem uma conta?<br><a href="cadastro.php">Crie uma</a> agora mesmo.</p>
    <script>
        const saida = document.getElementById("saidinha");
        const div_aviso = document.getElementById("aviso_conta_pai");
        const para_aviso = document.querySelector('.aviso_inexiste');
        const fechar_aviso = document.getElementById("fechar");

            if(saida.innerHTML == 1){
                div_aviso.style.display = 'block';
                para_aviso.classList.add('conta-existe');
            }

            fechar_aviso.addEventListener("click", fechar_aviso_conta);

            function fechar_aviso_conta(){
                div_aviso.style.display = 'none';
                para_aviso.classList.remove('conta-existe');
            }
    </script>
</body>
</html>