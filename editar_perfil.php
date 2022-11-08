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

        p{
            text-shadow: 1px 1px 2px black;
        }

        .salvar{
            position: fixed;
            bottom: 10px;
            left: 10px;
        }

        .salvar button{
            cursor: pointer;
            background-color: white;
            color: #0077a6;
            border: 1px solid white;
            padding: 10px;
            border-radius: 30px;
            font-weight: bolder;
            font-size: .8em;
        }

        .salvar span{
            color:green;
            font-size: .8em;
        }

        .salvar button:hover{
            background-color: transparent;
            color: white;
        }

        .imagens-container{
            background-color: transparent;
            padding: 10px 5px 10px 5px;
            border-radius: 10px;
            border: 1px solid white;
            margin-top: 10px;
            text-align: center;
        }

        .imagens-container img{
            border-radius: 50%;
            border: 2px solid white;
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
        <div>
            <p>
                <h2>Nome:</h2>
                <?php echo $_SESSION['nome']; ?>
            </p>
            <p>
                <h2>Apelido:</h2>
                <?php echo $_SESSION['apelido']; ?>
            </p>
            <p>
                <h2>E-mail:</h2>
                <?php echo $_SESSION['email']; ?>
            </p>
            <p>
                <h2>Data de Nascimento:</h2>
                <?php echo $_SESSION['data_nascimento']; ?>
            </p>
        </div>
    </div>

    <a href="perfil.php" class="salvar"><button>Salvar <span class="icon-checkmark"></span></button></a>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script>
        const imagem_perfil = document.getElementById("imagem_atual");
        const album = document.querySelector('.imagens-container');

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
                alert(e.path[0].src);
            }
        });

    </script>
</body>
</html>