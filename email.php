<?php
$email = "jhonáttan@outlook.com.br";
$senha = '123';

$user = substr($email,0,9); //extrai de uma string os dados, mostrando aonde começa e o tamanho
// se n informar o tamanho pega ate o final


$position = strpos($email,"@");// pega a posicao dentro da string do valor @

$user = substr($email, 0, $position);
echo $user . PHP_EOL;// pega o nome passando como tamanho um valor constante

echo mb_strtoupper($user);// transforma as letras em maiusculo
echo strtolower($user);// transforma as letras em minusculo
if(mb_strlen($senha) > 6){
    echo "senha boa";
}else{
    echo "senha curta";
}

