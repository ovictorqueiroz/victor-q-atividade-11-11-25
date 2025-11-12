<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
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

    <p>
        <?php
            session_start();

            if(isset($_SESSION['user'])){
                echo("<br> Usuário Logado: " . $_SESSION['user']);
            }

            else{
                echo("");
            }
        ?>
    </p>

</body>
</html>