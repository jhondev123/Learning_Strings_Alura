<?php

echo "teste quebra de linha" . PHP_EOL;
echo "testado";

$alunos = 15;
$i = 1;
for ($i; $i <= $alunos; $i++) {
    if ($i == 13) {
        continue;
    }
    echo $i . PHP_EOL;
}
