<?php

$string = "teste de integração com PHP";

//echo mb_strlen($string) . PHP_EOL;
//echo mb_strtoupper($string).PHP_EOL;
$converte = mb_convert_encoding($string,'ISO-8859-1','UTF-8');
//echo $converte;
echo mb_convert_case($string,MB_CASE_TITLE);