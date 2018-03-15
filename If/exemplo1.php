<?php

$qualASuaIdade = 75;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualASuaIdade < $idadeCrianca){

    echo "É uma criança";
}else if($qualASuaIdade < $idadeMaior){
    echo "Adolecente";
}else if($qualASuaIdade < $idadeMelhor){
    echo "Adulto";
}else{
    echo "Idoso";
}

echo "<br/>";

echo ($qualASuaIdade < $idadeMaior) ? "Menor de Idade" : "Maior de Idade";

?>