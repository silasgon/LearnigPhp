<form>
    <input type = "text" name ="nome">
    <input type = "date" name ="Nascimento">
    <input type = "submit" value ="OK">
</form>
<?php

if(isset($_GET)){


    foreach ($_GET as $key => $value) {
        echo "nome do Campo: " . $key;
        echo "Valor do Campo: " . $value;

        echo "<hr>";

    }
}
