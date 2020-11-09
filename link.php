<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "fulleletro";
/*
$servername = "localhost";
$username = "root";
$password = "";
$database = "fulleletro";
*/
$link = mysqli_connect($servername, $username, $password, $database);

if(!$link){
    die("A conexão do Banco de Dados falhou!".mysqli_connect_error());
} 

?>