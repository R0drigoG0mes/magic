<?php

session_start();
include_once('config.php');
$email = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="icones/outros_icones/style.css">
    <link rel="stylesheet" href="icones/style.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <title>Perfil | <?php echo $_SESSION['apelido']; ?></title>
    <style>
        body{
            background-image: linear-gradient(to top, #00c2ff, #0077a6, #300147);

            color: white;
            background-attachment: fixed;

            text-align: left;
            font-size: 1.2em;
            overflow: auto;
        }

        body h1{
            text-align: center;
        }

        #imagem_atual{
            border-radius: 50%;
            border: 1.5px solid white;
            transform: translateX(-50%);
            margin-left: 50%;
            box-shadow: 2px 2px 7px rgba(0, 0, 0, 0.6);
        }

        h1{
            padding: 0;
            margin: 0px 0px 20px 0px;
            text-shadow: 1px 1px 2px black;
            font-family: consolas;
            font-size: 1.5em;
        }

        h2{
            padding: 0;
            margin: 0;
            text-shadow: 1px 1px 2px black;
            display: inline;
            font-size: .9em;
            font-family: consolas;
        }

        .imagens-container{
            background-color: transparent;
            padding: 10px 5px 10px 5px;
            border-radius: 10px;
            border: 1px solid white;
            margin: 10px 0px 10px 0px;
            text-align: center;
        }

        .imagens-container img{
            border-radius: 50%;
            border: 2px solid white;
        }

        form{
            margin: 10px 0px 10px 0px;
            font-family: consolas;
        }
        label{
            display: block;
            margin: 5px 0px 5px 0px;
        }
        fieldset{
            border: 1px solid white;
            border-radius: 10px;
            box-shadow: 2px 2px 7px rgba(0, 0, 0, 0.6);
        }

        input{
            background-color: transparent;
            border: 1px solid white;
            color: #fff;
            padding: 5px;
            border-radius: 15px;
        }

        input:focus{
            outline: none;
        }

        input[type="text"],input[type="email"]{
            width: 95%;
        }

        input[type="submit"]{
            transform: translateX(-50%);
            margin: 35px 0px 0px 50%;
            padding: 5px 25px 5px 25px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        p{
            text-align: center;
            font-family: consolas;
            color: black;
            background-color: white;
            border-radius: 10px;
            padding: 10px;
            font-size: 1em;
            border: 1px solid black;
        }
    </style>
</head>
<body>
        <h1>Alterar Perfil</h1>
        <div>
            <img src="images/retratos/<?php echo $_SESSION['retrato'];?>.png" alt="" id="imagem_atual">
        </div>
        <div style="display: none;" class="imagens-container">
            <img src="images/retratos/1.png" alt="">
            <img src="images/retratos/2.png" alt="">
            <img src="images/retratos/3.png" alt="">
            <img src="images/retratos/4.png" alt="">
            <img src="images/retratos/5.png" alt="">
            <img src="images/retratos/6.png" alt="">
            <img src="images/retratos/7.png" alt="">
            <img src="images/retratos/8.png" alt="">
            <img src="images/retratos/9.png" alt="">
            <img src="images/retratos/10.png" alt="">
            <img src="images/retratos/11.png" alt="">
            <img src="images/retratos/12.png" alt="">
            <img src="images/retratos/13.png" alt="">
            <img src="images/retratos/14.png" alt="">
            <img src="images/retratos/15.png" alt="">
            <img src="images/retratos/16.png" alt="">
            <img src="images/retratos/17.png" alt="">
            <img src="images/retratos/18.png" alt="">
            <img src="images/retratos/19.png" alt="">
            <img src="images/retratos/20.png" alt="">
            <img src="images/retratos/21.png" alt="">
            <img src="images/retratos/22.png" alt="">
        </div>
        <form action="alterar_db.php" method="POST" autocomplete="on">
            <fieldset>
                <div>
                    <label for="inome">Nome:</label>
                    <input type="text" name="nome" id="inome" value="<?php echo $_SESSION['nome'];?>" maxlength="50" required>
                </div>
                <div>
                    <label for="iapelido">Apelido:</label>
                    <input type="text" name="apelido" id="iapelido" value="<?php echo $_SESSION['apelido'];?>" maxlength="50" required>
                </div>
                <div>
                    <label for="iemail">Email:</label>
                    <input type="email" name="email" id="iemail" value="<?php echo $_SESSION['email'];?>" maxlength="150" required>
                </div>
                <div>
                    <label for="idata_nascimento">Data de Nascimento:</label>
                    <input type="date" name="data_nascimento" id="idata_nascimento" value="<?php echo $_SESSION['data_nascimento'];?>" required>
                </div>
                <div  style="display: none;">
                    <input type="text" name="retrato" id="iretrato">
                </div>
                <p>
                    As alterações serão aplicadas somente no próximo login. 
                </p>
                <input type="submit" value="Salvar &#x2714;" name="submit">
            </fieldset>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script>
        const imagem_perfil = document.getElementById("imagem_atual");
        const album = document.querySelector('.imagens-container');
        const retrato_mudar = document.getElementById("iretrato");

        var quantia = 0;

        imagem_perfil.addEventListener("click",revelar_imagens);

        function revelar_imagens(){
            quantia++;
            if(quantia == 1){
                album.style.display = 'block';
            }
            else if(quantia == 2){
                album.style.display = 'none';
                quantia = 0;
            }
        }

        album.addEventListener("click", function(e){
            if(e.path[0] == '[object HTMLImageElement]'){

                var caminho_brutus = e.path[0].src;

                imagem_perfil.src = caminho_brutus;

                pedaço1 = new RegExp('http://localhost/magic/images/retratos/', 'i');

                var caminho_bruto = caminho_brutus.replace(pedaço1, '');

                pedaço2 = new RegExp('.png', 'i');

                var caminho = caminho_bruto.replace(pedaço2, '');

                retrato_mudar.value = caminho;

                revelar_imagens();
            }
        });

    </script>
</body>
</html>