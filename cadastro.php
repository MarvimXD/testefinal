<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="cadastrar.php" method="POST">
        <input type="text" placeholder="Nome" name="nome"><br>
        <input type="text" placeholder="Email" name="email"><br>
        <input type="text" placeholder="User" name="usuario"><br>
        <input type="password" placeholder="Senha" name="senha"><br>
        <input type="submit">
    
    </form>
    <a href="index.php">Logar</a>
    
</body>
</html>