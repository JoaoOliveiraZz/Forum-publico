<?php 

    $HostName = 'localhost:3306';
    $User = 'root';
    $Password = '';
    $DataBase = 'PiJoaoVictor';

    $connect = mysqli_connect($HostName, $User, $Password, $DataBase) or die ('Deu algo errado');

?>