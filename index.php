<?php 

session_start();

// print_r(($_SESSION));

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    $script = "<script>var logado = 0</script>";
    echo $script;
}
else{

    include_once('config.php');

    $email = $_SESSION['email'];

    //------------- RETRATO ---------------

    $pesquisar_retrato = "SELECT `retrato` FROM `usuarios` WHERE `email` = '$email';";

    $retrato_bruto = $conexao -> query(($pesquisar_retrato));

    $retrato = mysqli_fetch_assoc($retrato_bruto);

    $_SESSION['retrato'] = $retrato['retrato'];

    //----------------- APELIDO -------------------

    $pesquisar_apelido = "SELECT `apelido` FROM `usuarios` WHERE `email` = '$email';";

    $apelido_bruto = $conexao -> query(($pesquisar_apelido));

    $apelido = mysqli_fetch_assoc($apelido_bruto);

    $_SESSION['apelido'] = $apelido['apelido'];    
    
    //----------------- NOME -------------------

    $pesquisar_nome = "SELECT `nome` FROM `usuarios` WHERE `email` = '$email';";

    $nome_bruto = $conexao -> query(($pesquisar_nome));

    $nome = mysqli_fetch_assoc($nome_bruto);

    $_SESSION['nome'] = $nome['nome'];    
    
    //----------------- NASCIMENTO -------------------

    $pesquisar_nascimento = "SELECT `data_nascimento` FROM `usuarios` WHERE `email` = '$email';";

    $data_bruta = $conexao -> query(($pesquisar_nascimento));

    $nascimento = mysqli_fetch_assoc($data_bruta);

    $_SESSION['data_nascimento'] = $nascimento['data_nascimento'];

    //----------------- NOTIFICAÇÕES -------------------

    $pesquisar_notificar = "SELECT `mensagem` FROM `usuarios` WHERE `email` = '$email';";

    $notificar_bruta = $conexao -> query(($pesquisar_notificar));

    $notificar = mysqli_fetch_assoc($notificar_bruta);

    $_SESSION['mensagem'] = $notificar['mensagem'];
    
    //--------- COMUNICAR JAVASCRIPT QUE ENTROU -------------

    $script = "<script>var logado = 1;</script>";
    echo $script;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="keywords" content="MagíCia,MagíCia,MagiCia">
    <meta name="description" content="Jogue agora o MagíCia">
    <meta name="author" content="Rodrigo Gomes Cordeiro">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="icones/style.css">
    <link rel="stylesheet" href="icones/outros_icones/style.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <script src="js/script.js" defer></script>
    <title>Home | MagíCia</title>

    <style>
        .perfil-mobile{
            border-radius: 50%;
            margin-top: 10px;
            border: 1.5px solid white;
        }

        .apelido{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 1.1em;
            font-weight: bold;
            color: #5b0365;
        }
    </style>

</head>
<body>
    <header>
        <!-- POSITION ABSOLUTE -->

       <a href="perfil.php" class="imagem_atual"><img class="nmobile" src="images/retratos/<?php if(isset($_SESSION['retrato'])){echo $_SESSION['retrato'];} ?>.png" alt=""></a>

       <a href="perfil.php" class="email_atual"><?php if(isset($_SESSION['email'])){echo $_SESSION['email'];} ?></a>

        <ul class="lista-menu">
            <span class="icon-cross icones"></span>
            <li><a href="" class="top-link hamburguer">Jogar &#x1F3AE;</a></li>
            <li><a href="" class="top-link hamburguer">Loja &#x1F6D2;</a></li>
            <li><a href="" class="top-link hamburguer">Inventário &#x1F4E6;</a></li>
            <li><a href="" class="top-link hamburguer ultimo">Reportar Bug &#x1F41E;</a></li>
            <li><a href="perfil.php"><img class="perfil-mobile" src="images/retratos/<?php echo $_SESSION['retrato'];?>.png" alt=""></a></li>
            <li><a href="perfil.php" class="apelido"><?php echo $_SESSION['apelido']; ?></a></li>
        </ul>
        <!-- POSITION ABSOLUTE -->
        <p class="texto-logo1">Mag</p>
        <img src="images/favicon.png" alt="" class="logo">
        <p class="texto-logo2">Cia</p>
        <nav>
            <span class="icon-menu icones"></span>
            <a href="login_estrutura.php" class="top-link btn-nav login" id="chato">Login<span class="icon-enter" style="font-size: .8em;"></span></a>
        </nav>
    </header>

    <ul class="lista-menu-desktop" id="desktopi">
            <li class="outros-btns"><a href="">Jogar &#x1F3AE;</a></li>
            <li class="outros-btns meiuca"><a href="">Loja &#x1F6D2;</a></li>
            <li class="outros-btns"><a href="">Inventário &#x1F4E6;</a></li>
    </ul>

    <img src="images/imagem_desktop.png" alt="">
        
    <div class="slider">

        <span class="icon-circle-right next"></span>
        <span class="icon-circle-left prev"></span>


        <div class="slide primeiro">
            <img src="" alt="" class="primeiro_s">
            <p class="text-slide">Batalhas emocionantes</p>
        </div>
        <div class="slide segundo">
            <img src="" alt="" class="meio_s">
            <p class="text-slide" id="text-meio">Batalhas frenéticas</p>
        </div>
        <div class="slide terceiro">
            <img src="" alt="" class="ultimo_s">
            <p class="text-slide">Cenários memoráveis</p>
        </div>
        <div class="radios">
            <div id="radio-5"></div>
            <div id="radio-4"></div>
            <div id="radio-3"></div>
            <div id="radio-2"></div>
            <div id="radio-1"></div>
        </div>
    </div>
    <main>
        <section>
            <article>
                <p class="main-text first">
                    <span class="nome-jogo">MagíCia</span> é um jogo de plataforma bidimensional construído majoritariamente de asets gratuitos, você está pronto para as batalhas mais loucas e caoticas que a internet pode te oferecer?
                </p>
            </article>
        </section>
        <section>
            <article>
                <p class="main-text">
                   Quer um jogo de navegador mobile? Vire a orientação do seu dispositivo e comece a aventura!
                </p>
            </article>
        </section>
        <section>
            <article>
                <p class="main-text">
                    Quer apoiar o projeto <span class="nome-jogo">MagíCia</span>? Doe a quantia que desejar <span class="btn-apoio"><a href="">aqui</a></span>
                </p>
            </article>
        </section>
    </main>
    <footer class="final">
        <ul class="sociais">
            <li><a href="" target="_blank" class="link_sociais"><span class="icon-twitter"></span></a></li>
            <li><a href="" target="_blank" class="link_sociais"><span class="icon-facebook2"></span></a></li>
            <li><a href="" target="_blank" class="link_sociais"><span class="icon-reddit"></span></a></li>
            <li><a href="" target="_blank" class="link_sociais"><span class="icon-whatsapp"></span></a></li>
            <li><a href="" target="_blank" class="link_sociais"><span class="icon-instagram"></span></a></li>
        </ul>
        <p class="text-footer">
            Copyright magícia.io &copy;
        </p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</body>
</html>