<?php

$user = 'sysadmin';
$password = 'Mam@ti21#';
$database = 'nuvem';
$host = 'localhost';


$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->error){
    die ("Falha ao conectar " . $mysqli->error);
}





?>