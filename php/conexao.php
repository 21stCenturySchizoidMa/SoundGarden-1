<?php
    $server = 'localhost';
    $usuario = 'root';
    $senha = '';

    $conn = mysqli_connect($server, $usuario, $senha, 'cadastro') or die ("erro ao conectar");

    echo "conectado";

?>


