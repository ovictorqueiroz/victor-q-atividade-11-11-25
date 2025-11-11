<?php 
    session_start();

    $_SESSION['user'];

    echo("Você está na página do VISITANTE!");
    echo("Bem vindo, " . $_SESSION['user']);

?>