<?php 

session_start();

// print_r(($_SESSION));

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['email'];

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
    <link rel="stylesheet" href="icones/style.css">
    <link rel="stylesheet" href="icones/outros_icones/style.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <script src="js/script.js" defer></script>
    <title>Home | MagíCia</title>
</head>
<body>
    <header>
        <ul class="lista-menu">
            <span class="icon-cross icones"></span>
            <li><a href="" class="top-link hamburguer">Jogar &#x1F3AE;</a></li>
            <li><a href="" class="top-link hamburguer">Loja &#x1F6D2;</a></li>
            <li><a href="" class="top-link hamburguer">Inventário &#x1F4E6;</a></li>
            <li><a href="" class="top-link hamburguer ultimo">Reportar Bug &#x1F41E;</a></li>
        </ul>
        <p class="texto-logo1">Mag</p>
        <img src="images/favicon.png" alt="" class="logo">
        <p class="texto-logo2">Cia</p>
        <nav>
            <span class="icon-menu icones"></span>
            <a href="login.html" class="top-link btn-nav login" id="chato">Login<span class="icon-enter"></span></a>
        </nav>
    </header>
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
</body>
</html>