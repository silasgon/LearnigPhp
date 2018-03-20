<?php

require_once("config.php");

echo session_save_path();

var_dump(session_status());

switch(session_status()){
    case PHP_SESSION_DISABLE:
    echo"as sessões estiverem desabilitadas";
    break;
    case PHP_SESSION_NONE:
    echo"as sessões estiverem habilitadas, mas nenhuma existir";
    break;
    case PHP_SESSION_ACTIVE:
    echo"as sessões estiverem habilitadas, e uma existi";
    break;

}
?>