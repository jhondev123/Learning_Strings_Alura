<?php

// mantem a identaçaõ da string, HEREDOC


function geraEmail():void
{
$email = <<<FINAL
ola asd

    estamos entrando em contato

{assinatura}

FINAL;
echo $email;
}
geraEmail();