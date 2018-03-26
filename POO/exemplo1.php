<?php

class Pessoa{

    public $nome; //atributo

    public function falar(){ //Método

        return "O Meu nome é " . $this->nome;

    }
}

$silas = new pessoa();
$silas->nome = "Silas Gonçalves";
echo $silas->falar();
