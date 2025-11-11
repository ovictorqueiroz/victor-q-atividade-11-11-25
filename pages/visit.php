<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        session_start();

        $_SESSION['user'];
        $_SESSION['loggedUser']
    ?>
    <title>Document</title>
</head>
<body>
    <h1>Você Está na página do Visitante</h1>
    <h2><?php echo("Bem vindo, " . $_SESSION['user'])?></h2>

    <a href="../controllers/sair.php">Sair</a>
</body>
</html>



