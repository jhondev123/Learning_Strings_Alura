<?php

$texto = "caralho, filho da puta";

var_dump(str_replace( // transforma uma parte de uma string em outra, de onde pra onde e de que
    ["caralho", "filha da puta"]
    ,
    ["***","********"]
    ,$texto));

var_dump(strtr($texto,"caralho","***"));// transforma cada caracterer
var_dump(strtr($texto,['caralho'=> '*******',"filho da puta" => "************"]));

