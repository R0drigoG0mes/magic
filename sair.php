<?php

session_start();
unset($_SESSION['email']);
unset($_SESSION['senha']);
unset($_SESSION['retrato']);
session_unset();
header('Location: login_estrutura.php');

?>