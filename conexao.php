<?php

define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'root');
define('DB', 'loginteste3');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não conectou!');


?>