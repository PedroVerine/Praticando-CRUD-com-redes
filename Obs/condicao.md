if
$portas = 24;

if ($portas > 10) {
echo "Alta capacidade";
}

if / else

if ($portas > 10) {
echo "Alta capacidade";
} else {
echo "Baixa capacidade";
}

if / elseif / else

if ($portas >= 48) {
    echo "Muito alta";
} elseif ($portas >= 24) {
echo "Alta";
} elseif ($portas >= 8) {
echo "Média";
} else {
echo "Baixa";
}

switch
Bom quando você compara um mesmo valor com várias opções.
$tipo = "OLT";

switch ($tipo) {
case "Switch":
echo "Equipamento de acesso";
break;

    case "Roteador":
        echo "Equipamento de roteamento";
        break;

    case "OLT":
        echo "Equipamento GPON";
        break;

    default:
        echo "Tipo desconhecido";

}
