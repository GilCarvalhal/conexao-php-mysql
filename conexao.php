<?php

$hostname = "localhost";
$bancodedados = "clientes";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if ($mysqli->connect_errno) {
    echo "Fala ao conectar: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
} else {
    echo "Conectado!</br>";
}
