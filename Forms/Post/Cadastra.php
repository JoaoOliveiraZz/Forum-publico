<?php

    $Host = 'localhost';
    $User = 'root';
    $Database = 'pi';
    $Password = 'IFcursobancodedados';

    $connect = mysqli_connect($Host, $User, $Password, $Database) or die('Não foi possível conectar');

    $id = $_POST['idUser'];
    $Titulo = $_POST['Titulo'];
    $Texto = $_POST['Texto'];
    $Lang = $_POST['Lang'];
    
    date_default_timezone_set('America/Sao_Paulo');
    $DataPost = date('Y-m-d H:i:s');
    
    $sql = "INSERT INTO Post (idUser, Titulo, Linguagem, Texto, DataPub) VALUES ('$id', '$Titulo', '$Lang', '$Texto', '$DataPost')";

    echo $sql;

    if(mysqli_query($connect, $sql)){
        header("Location: ../../User/Home.php");
    }else{
        header("Location: ../Post/Cadastro.php");
    }






?>