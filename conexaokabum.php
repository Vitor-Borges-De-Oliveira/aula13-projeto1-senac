<?php

$localhost   = "localhost";
$username    = "root";
$password    = "";
$db          = "bdempresa";

try {
    $connect = new PDO("mysql:host=$localhost;dbname=$db",$username,$password);
}

catch (PDOException $erro) {
    echo "Conexão falha: ". $erro->getMessage();
}