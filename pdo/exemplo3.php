<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "jose";
$password = "!@#$";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido ok";