<?php

$data = array(
    "empresa"=>"SilasColl Tecnology"
);

setcookie("NOME_DO_COOKIE", json_encode($data),time() + 3600);

echo "OK";