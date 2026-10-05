<?php

require_once "index.php";

$sql = "SELECT * FROM equipamentos";

$resultado = $conexao->query($sql);

foreach ($resultado as $equipamento) {
    echo $equipamento["nome"] ,PHP_EOL;
}