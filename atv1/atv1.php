

<?php

require_once "index.php"; // é tipo o import do py 

$sql = "SELECT * FROM equipamentos";

$resultado = $conexao->query($sql);

foreach ($resultado as $equipamento) {
    echo $equipamento["tipo"] ,PHP_EOL;
}

// 
foreach ($resultado as $equipamento) {
    echo "ID: " . $equipamento["id"] . PHP_EOL;
    echo "Tipo: " . $equipamento["tipo"] . PHP_EOL;
    echo "Portas: " . $equipamento["portas"] . PHP_EOL;
    echo "-------------------" . PHP_EOL;
}



foreach($resultado as $equipamentos) {
   if ($equipamentos["portas"] > 10) {
    echo " Alta capacidade";}
    else {
        echo "Baixa capacidade";}}
