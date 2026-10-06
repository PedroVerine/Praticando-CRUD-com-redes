1.  foreach — ótimo para arrays e resultados do banco

        foreach ($resultado as $equipamento) {
        echo $equipamento["id"] . PHP_EOL;
        echo $equipamento["tipo"] . PHP_EOL;

    }

---

2.  for — quando você sabe quantas vezes quer repetir
    for ($i = 0; $i < 5; $i++) {
    echo $i . PHP_EOL;
    }
    Resultado:
    0
    1
    2
    3
    4
    for (início; condição; incremento) {
    // código
    }

---

3.  while — repete enquanto uma condição for verdadeira
    $i = 0;

while ($i < 5) {
echo $i . PHP_EOL;
$i++;
}

Muito útil quando você não sabe exatamente quantas repetições vão acontecer, mas depende de uma condição.

---

4. do while — executa pelo menos uma vez
   $i = 0;

do {
echo $i . PHP_EOL;
    $i++;
} while ($i < 5);
$i = 10;

do {
echo "Executou!" . PHP_EOL;
} while ($i < 5);
