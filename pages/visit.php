<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        session_start();

        $_SESSION['user'];
    ?>
    <title>Visitante</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1><?php echo("Bem vindo, " . $_SESSION['user'])?></h1>

    <a href="../controllers/sair.php">Sair</a>
</body>
</html>



