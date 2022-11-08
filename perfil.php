<?php

session_start();

if($_SESSION['mensagem'] == 1){
    $codigo = '<script>var notifica = 1;</script>';
    echo $codigo;
}else{
    $codigo = '<script>var notifica = 0;</script>';
    echo $codigo;
}

?>
<!DOCTYPE html>
<html lang="en">
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

        img:hover{
            cursor: pointer;
            opacity: 70%;
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

        .cancelar{
            position: absolute;
            bottom: 10px;
            left: 10px;
        }

        .cancelar button{
            cursor: pointer;
            background-color: white;
            color: #0077a6;
            border: 1px solid white;
            padding: 10px;
            border-radius: 30px;
            font-weight: bolder;
            font-size: .8em;
        }

        .cancelar span{
            color:red;
        }

        .cancelar button:hover{
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

        .editar button:hover{
            background-color: transparent;
            color: white;
        }

        #inotifica{
            width: 15px;
            height: 15px;
            outline: 2px solid white;
        }

    </style>
</head>
<body>
    <div class="meio">
        <div>
            <h1>Alterar Perfil</h1>
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

    <a href="index.php" class="cancelar"><button>Cancelar<span class="icon-cross"></span></button></a>

    <a href="" class="editar"><button>Editar<span class="icon-pencil"></span></button></a>
 
    <script>
        const receber_notifica = document.getElementById("inotifica");

        if(notifica == 1){
            receber_notifica.checked = true;
        }
        else
            {
            receber_notifica.checked = false;
        }

    </script>
</body>
</html>