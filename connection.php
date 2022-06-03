<?php 

    $HostName = 'localhost:3312';
    $User = 'root';
    $Password = '';
    $DataBase = 'ForumOnline';

    $connect = mysqli_connect($HostName, $User, $Password, $DataBase) or die ('Deu algo errado');

?>