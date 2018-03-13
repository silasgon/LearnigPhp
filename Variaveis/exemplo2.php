<?php
/*
$anoNascimento = '1988';
$nomeCompleto = "Silas Gonçalves";
*/
//Na linha de baixo temos uma variável com número.
$nome1 = "Silas";

$sobrenome = "Gonçalves dos Reis";

$nomeCompleto = $nome1 ." ". $sobrenome;

echo $nomeCompleto;
echo "<br/>";
echo $nome1;

unset($nome1);

if(isset($nome1))
{
    echo $nome1;
}

?>