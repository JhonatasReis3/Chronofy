<?php
$host = "localhost";
$user = "root";
$senha = "Jhon.11032005";
$database = "chronofy";
$conexao = new mysqli($host, $user, $senha, $database);

// Check connection
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}
echo "Connected successfully";
