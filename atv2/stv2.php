
<?php

require_once "atv1/index.php"; // é tipo o import do py 

$sql = "SELECT * FROM equipamentos";

$resultado = $conexao->query($sql);


// Objetivo realizar a exibição do SWT e seu status. 


foreach ($resultado as $equipamento) {
    echo "ID: " . $equipamento["id"] . PHP_EOL;
    echo "Tipo: " . $equipamento["tipo"] . PHP_EOL;
    echo "Portas: " . $equipamento["portas"] . PHP_EOL;
    echo "Status". $equipamento["status"]; PHP_EOL;
    echo "-------------------" . PHP_EOL;
    
    if ($equipamento["status"] === "online") {
        echo "Tudo certo"; 
    }
    elseif ($equipamento["status"] === "offline") {
        echo "Atenção equipamento sem comunicação"; 
     } else {
        echo "Equipamento não identificado"; 
     }
}