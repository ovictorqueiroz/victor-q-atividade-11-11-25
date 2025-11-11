<?php
    session_start();
    echo("Você está na página de login");

    $_SESSION['user'] = $_POST['user'];
    $_SESSION['loggedUser'] = $_POST['user'];
    $_SESSION['pass'] = $_POST['pass'];

    if($_SESSION['user'] == "Admin" and $_SESSION['pass'] == 1234){
        header("location:../pages/admin.php");
    }

    if($_SESSION['user'] == "Visit" and $_SESSION['pass'] == 12345){
        header("location:../pages/visit.php");
    }

    if($_SESSION['user'] == "Colab" and $_SESSION['pass'] == 123456){
        header("location:../pages/colab.php");
    }

?>