<?php

$host="localhost";
$username="root";
$password="usbw";
$db_name="cadastro";

$conect = @mysqli_connect($host, $username, $password, $db_name) or die ("OPS! Algo deu errado.");

?>