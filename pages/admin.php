<?php 
    session_start();

    $_SESSION['user'];

    echo("Você está na página do ADMINISTRADOR!");
    echo("Bem vindo, " . $_SESSION['user']);

    

?>