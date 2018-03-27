<?php

class Endereco{

    private $logradouro;
    private $numero;
    private $cidade;

  public function __construct($a, $b, $c)
  {
      $this->logradouro = $a;
      $this->numero = $b;
      $this->cidade = $c;
  }

  public function __destruct()
  {
      // TODO: Implement __destruct() method.
    //  var_dump("Destruir");
  }

  public function __toString()
  {
      // TODO: Implement __toString() method.
      return $this->logradouro . ", " .$this->numero . ", " .$this->cidade;
  }

}

$meuEndereco = new Endereco("Quadra 1306 SUl ALAMEDA 13A","09","Palmas");

echo $meuEndereco;