<?php

session_start();

if(isset($_POST['submit']))
{
    include_once('config.php');

    if($_POST['retrato'] == ''){
        $_POST['retrato'] = $_SESSION['retrato'];
    }

    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $apelido = $_POST['apelido'];
    $email = $_POST['email'];
    $retrato = $_POST['retrato'];


    $mudança = "UPDATE `usuarios` SET `nome` = '{$nome}', `data_nascimento` = '{$data_nascimento}', `apelido` = '{$apelido}', `email` = '{$email}', `retrato` = '{$retrato}' WHERE `usuarios`.`nome` = '{$_SESSION['nome']}';";

    $mudar_quase_tudo = $conexao -> query($mudança);
    
    header('Location: perfil.php');
}

?>