<?php
//addslashes transforma a string em dados que não podem ser interpretados como código
//htmlentities transforma as possiveis códigos em entidades
// htmlspecialchars transforma as possiveis códigos em
$nome = 'campo';
?>
<input type="text"name="<?php echo htmlspecialchars($nome); ?>" />


