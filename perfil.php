<?php

session_start();
include_once('config.php');
$email = $_SESSION['email'];

//----------- ANALISAR SE RECEBIMENTO DE MENSAGENS ESTÁ ATIVADO

if($_SESSION['mensagem'] == 1){
    $codigo = '<script>var notifica = 1;</script>';
    echo $codigo;
}
else if($_SESSION['mensagem'] == 0){
    $codigo = '<script>var notifica = 0;</script>';
    echo $codigo;
}

//---------------------- ATIVAR OU DESATIVAR O RECEBIMENTO DE MENSAGENS

if(isset($_POST['ativar'])){

    // include_once('config.php');

    $consulta_ativar = "UPDATE `usuarios` SET `mensagem` = 1 WHERE `usuarios`.`nome` = '{$_SESSION['nome']}';";

    $executar_mudança = $conexao -> query($consulta_ativar);

}
if(isset($_POST['desativar'])){

    // include_once('config.php');

    $consulta_desativar = "UPDATE `usuarios` SET `mensagem` = 0 WHERE `usuarios`.`nome` = '{$_SESSION['nome']}';";

    $executar_mudança2 = $conexao -> query($consulta_desativar);

}

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

            text-align: center;
            font-size: 1.2em;
            overflow: auto;
        }

        img{
            border-radius: 50%;
            border: 1.5px solid white;
        }

        h1{
            padding: 0;
            margin: 0;
            transform: translateY(-50px);
            text-shadow: 1px 1px 2px black;
        }

        h2{
            padding: 0;
            margin: 0;
            text-shadow: 1px 1px 2px black;
            display: inline;
            font-size: .9em;
        }

        p{
            text-shadow: 1px 1px 2px black;
        }

        span{
            font-size: .7em;
            text-shadow: .5px .5px 1px black;
            margin-left: 5px;
            cursor: pointer;
        }

        input{
            cursor: pointer;
        }

        .senhaa{
            cursor: pointer;
            background-color: white;
            color: #0077a6;
            border: 1px solid white;
            padding: 10px;
            border-radius: 30px;
            font-weight: bolder;
            font-size: .8em;
        }

        .senhaa:hover{
            background-color: transparent;
            color: white;
        }

        .voltar{
            position: absolute;
            bottom: 10px;
            left: 10px;
        }

        .voltar button{
            cursor: pointer;
            background-color: white;
            color: #0077a6;
            border: 1px solid white;
            padding: 10px;
            border-radius: 30px;
            font-weight: bolder;
            font-size: .8em;
        }

        .voltar span{
            text-shadow: none;
            font-size: .95em;
        }

        .voltar button:hover{
            background-color: transparent;
            color: white;
        }

        /* editar */

        .editar{
            position: absolute;
            bottom: 10px;
            right: 10px;
        }

        .editar button{
            cursor: pointer;
            background-color: white;
            color: #0077a6;
            border: 1px solid white;
            padding: 10px;
            border-radius: 30px;
            font-weight: bolder;
            font-size: .8em;
        }

        .editar span{
            text-shadow: none;
            font-size: .95em;
        }

        .editar button:hover{
            background-color: transparent;
            color: white;
        }

        #inotifica{
            width: 13px;
            height: 13px;
            outline: 2px solid white;
        }

    </style>
</head>
<body>
    <output style="display: none;" id="saida"></output>
    <div class="meio">
        <div>
            <img src="images/retratos/<?php echo $_SESSION['retrato'];?>.png" alt="">
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
            <p>
                <label for="inotifica">Receber Notificações?</label>
                <input type="checkbox"  id="inotifica">
            </p>
            <p>
                <button class="senhaa">Alterar Senha</button>
            </p>
        </div>
    </div>

    <a href="index.php" class="voltar"><button>Voltar<span class="icon-redo2"></span></button></a>

    <a href="editar_perfil.php" class="editar"><button>Editar<span class="icon-pencil"></span></button></a>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
 
    <script>
        const receber_notifica = document.getElementById("inotifica");
        const output = document.getElementById("saida");

        //---- FALAR PARA O SERVIDOR AS PREFERENCIAS ----

        window.addEventListener("load", preferencias);

        function preferencias(){
            if(notifica == 1){
                receber_notifica.checked = true;
            }
            else if(notifica == 0){
                receber_notifica.checked = false;
            }
        }

        receber_notifica.addEventListener("change", mudar_notifica);

        function mudar_notifica(){
            if(receber_notifica.checked == false){

                var dados = new FormData();

                var nao_notificar = 0;

                dados.append('desativar', nao_notificar);

                $.ajax({
                url: 'perfil.php',
                method: 'post',
                data: dados,
                processData: false,
                contentType: false,
                success: function(resposta){
                    console.log('O AJAX FOI ENVIADO');
                }
                })

            }
            else if(receber_notifica.checked == true){

                var dados = new FormData();

                var notificar = 1;

                dados.append('ativar', notificar);

                $.ajax({
                url: 'perfil.php',
                method: 'post',
                data: dados,
                processData: false,
                contentType: false,
                success: function(resposta){
                    console.log('O AJAX FOI ENVIADO');
                }
                })

            }
        }

    </script>
</body>
</html>