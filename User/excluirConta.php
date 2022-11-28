<?php

    include('../Database/connection.php');
    session_start();

    $id = $_POST['Id'];

    $delete = "DELETE FROM Usuario WHERE id = '$id'";

    if(mysqli_query($connect, $delete)){
        unset($_SESSION['login']);
        session_destroy();
        header('Location: ../index.php');
    }else{
        header('Location: Home.php');
    }












?>