<?php
    session_start();
    echo("Você está na página de login");

    $_SESSION['user'] = $_POST['user'];
    $_SESSION['pass'] = $_POST['pass'];

    if($_SESSION['user'] == "Admin" and $_SESSION['pass'] == "1234"){
        $_SESSION['user'] = "Administrador";
        header("location:../pages/admin.php");
    }

    else if($_SESSION['user'] == "Visit" and $_SESSION['pass'] == "12345"){
        $_SESSION['user'] = "Visitante";
        header("location:../pages/visit.php");
    }

    else if($_SESSION['user'] == "Colab" and $_SESSION['pass'] == "123456"){
        $_SESSION['user'] = "Colaborador";
        header("location:../pages/colab.php");
    }

    else{
        echo"Usuário ou senha incorreta";
        header("location:../index.php");
    }


?>