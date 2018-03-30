<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new cadastro();

$cad->setNome("Silas");
$cad->setEmail("silas@silas.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();

//echo $cad;
