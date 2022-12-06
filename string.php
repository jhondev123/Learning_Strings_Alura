<?php
$nome = "fíat uno";

if(str_contains($nome, "uno")) //verifica se tem o valor dentro da string
{
    echo "e vdd que o $nome faz parte";
}else{
    echo "nao e  vdd que o $nome faz parte";
}

var_dump(explode(' ',$nome));

list($nome,$sobrenome) = explode(' ',$nome); // separa a string em varios pedaços, no caso separado por espaço na string
