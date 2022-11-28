<?php

    include('../Database/connection.php');

    $id = $_GET['id'];

    $delete = "DELETE FROM post WHERE id = $id";

    if(mysqli_query($connect, $delete)){
        header('Location: ../User/Home.php');
    }else{
        header('Location: ../User/Home.php?error');
    }













?>