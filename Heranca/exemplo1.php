<?php

class Documento {

    private $numero;

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($n): void
    {
        $this->numero = $n;
    }

}

class CPF extends Documento{

    public function validar():bool {

        $numeroCPF = $this->getNumero();
        //validação de cpf
        return true;
    }

}

$doc = new CPF();

$doc->setNumero("009842581-16");
$doc->validar();

var_dump($doc->validar());

echo "<br/>";

echo $doc->getNumero();