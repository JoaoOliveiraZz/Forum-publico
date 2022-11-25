<?php

$server = "localhost";
$user = "root";
$password = "IFcursobancodedados";
$db = "pi";

$conn = mysqli_connect($server,$user,$password,$db);

if(!$conn) {
    die("Connection Failed:".mysqli_connect_error());
}

?>