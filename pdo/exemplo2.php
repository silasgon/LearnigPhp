<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SFA-NTLNV; connectionPooling=0","sa","1234");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row){

    foreach ($row as $key => $value){

        echo "<strong>".$key.":</strong>".$value."<br/>";
    }

    echo "+++++++++++++++++++++++++++++++++++++++++++++++++++<br/>";
}

