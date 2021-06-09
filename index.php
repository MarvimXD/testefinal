<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Login 1.0</title>
</head>
<body>

    <?php
    if(isset($_SESSION['nao_autenticado'])):
    ?>

    <h2>Usuário ou senha incorretos</h2><br>

    <?php
    unset($_SESSION['nao_autenticado']);
    endif;
    ?>

    <form action="login.php" method="POST">
        <input type="text" name="usuario">
        <br>
        <input type="password" name="senha" id=""><br>
        <input type="submit" name="" id="">
    </form>
</body>
</html>