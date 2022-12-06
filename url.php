<?php
$url = 'https://fiatunotunado.com.br';
if(str_starts_with($url,'https')){ // verifica se a string começa com https
    echo " e um site seguro";
}else{
    echo " nao e um site seguro ";
}

if(str_ends_with($url,'.br')){ // verifica se a string termina com .br
    echo "e do brasil";
}else{
    echo "nao e do brasil";
}
