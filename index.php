<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade | 11/11/25</title>
</head>

<body>
    <h1>Login</h1>
    <form action="./controllers/verificaLogin.php" method="post">
        <label for="user">Usuário</label>
        <input type="text" name="user" id="user">
        
        <label for="pass">Senha</label>
        <input type="password" name="pass" id="pass">

        <input type="submit">
    </form>

    <h5>
        <?php
            session_start();
            echo("<br> Usuário Logado:" . $_SESSION['loggedUser']);
        ?>
    </h5>

</body>
</html>