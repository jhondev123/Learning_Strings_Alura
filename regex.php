<?php
$telefones = [' (45) 99968 - 1324','(45) 99968 - 1224','(45) 99968 - 1524','(45)99968-1624'];
$regex = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';
foreach ($telefones as $telefone){
    $telefoneValido = preg_match($regex, $telefone);

    //é uma função que padroniza o telefone com (numeros de 0 a 9) {2 vezes} pode ter 9? a mais,
    //(numeros de 0 a 9) 4 vezes, traço - ,(numeros de 0 a 9) 4 vezes

if($telefoneValido){
    echo 'telefone valido'.PHP_EOL;
}else{
    echo 'telefone invalido'.PHP_EOL;
}
// função que troca os dois valores do DD em XX se o telefone estiver no padrão que a regex diz
    echo preg_replace(
            $regex,
            '(XX) \2',
            $telefone
        ) .PHP_EOL;
}
