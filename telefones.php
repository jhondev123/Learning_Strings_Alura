<?php

$telefones = ['(45)99968-1324 ','(45)99968-1224','(45)99968-1524','(45)99968-1624'];
echo implode(PHP_EOL,$telefones).PHP_EOL; //junta os dados de um array

$nome = " fíat uno ";
echo trim($nome). PHP_EOL; // apara os espaços em branco da string no começo e fim
echo ltrim($nome). PHP_EOL; // apara os espaços em branco da string no começo
echo rtrim($nome). PHP_EOL; // apara os espaços em branco da string no fim
