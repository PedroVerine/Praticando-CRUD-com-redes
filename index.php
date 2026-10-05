<?php

$host = "localhost";
$usuario = "root";
$senha = "SuaSenha@2026!";
$banco = "estudo_crud_php"; 

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

echo "Conectado com sucesso!";