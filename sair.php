<?php

session_start();
unset($_SESSION['email']);
unset($_SESSION['senha']);
session_unset();
header('Location: login.html');

?>