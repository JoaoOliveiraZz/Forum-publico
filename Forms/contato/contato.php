<?php

    include('../../Database/connection.php');
    session_start();

    $Titulo = $_POST['Titulo'];
    $Texto = $_POST['Texto'];
    $id_user = isset($_SESSION['login']) ? $_SESSION['login'] : 0;

    $contato = "INSERT INTO Contato (id_user, Titulo, Texto) VALUES ('$id_user','$Titulo','$Texto')";


    if(mysqli_query($connect, $contato)){
        header('Location: ../../User/Home.php');
    }else{
        header('Location: contatoForm.php?error=1');
    }











?>