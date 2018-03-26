<?php

class carro{

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    /**
     * @return mixed
     */
    public function getMotor():float
    {
        return $this->motor;
    }

    /**
     * @param mixed $motor
     */
    public function setMotor($motor): void
    {
        $this->motor = $motor;
    }

    /**
     * @return mixed
     */
    public function getAno() : int
    {
        return $this->ano;
    }

    /**
     * @param mixed $ano
     */
    public function setAno($ano): void
    {
        $this->ano = $ano;
    }

    public function exibir(){

        return array(
          "modelo"=>$this->getModelo(),
          "motor"=>$this->getMotor(),
          "ano"=>$this->getAno()
        );
    }
}

$gol = new carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2018");

var_dump($gol->exibir());