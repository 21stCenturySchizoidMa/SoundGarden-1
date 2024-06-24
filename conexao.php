<?php
define('HOST','');
define('USUARIO', 'root');
define('SENHA','1234');
define('DB','login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Ouve um erro na conexão, tente novamente.');
