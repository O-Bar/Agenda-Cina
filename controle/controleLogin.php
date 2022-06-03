<?php

    include_once('../modelo/classeLogin.php');

    $login = new Login();
    if (isset($_POST['entrar'])) {
        $login->FazerLogin($_POST['email'], $_POST['senha']);
    }
    if (isset($_POST['sair'])) {
        $login->fazerLogout();
    }