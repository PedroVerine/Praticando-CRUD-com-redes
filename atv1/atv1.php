<?php

require_once "index.php"; // é tipo o import do py 

$sql = "SELECT * FROM equipamentos";

$resultado = $conexao->query($sql);

foreach ($resultado as $equipamento) {
    echo $equipamento["tipo"] ,PHP_EOL;
}

// 
foreach ($resultado as $equpamento) {
    echo $equipamento["portas"] ,PHP_EOL;
        echo $equipamento["id"] ,PHP_EOL;
                echo $equipamento["tipo"] ,PHP_EOL;


}