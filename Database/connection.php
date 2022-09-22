<?php

    $Host = 'localhost';
    $User = 'root';
    $Database = 'pi';
    $Password = 'IFcursobancodedados';

    date_default_timezone_set('America/Sao_Paulo');

    $connect = mysqli_connect($Host, $User, $Password, $Database) or die('Não foi possível conectar');


?>