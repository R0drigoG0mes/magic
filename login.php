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
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        $conta_inexistente = 1;
        header('Location: login_estrutura.php');
    }
    else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: index.php');
    }
}

?>