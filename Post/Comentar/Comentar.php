<?php
    session_start();

    include_once('../../Database/connection.php');

    $id = $_SESSION['login'];
    $Post = $_POST['Id'];
    $Comentario = $_POST['Comentario'];
    $Texto = $_POST['Comentario'];
    date_default_timezone_set('America/Sao_Paulo');
    $DataComent = date('Y-m-d H:i:s');

    $sql = "INSERT INTO Comentarios (user_id, post_id, Texto, DataComent) VALUES ('$id', '$Post', '$Texto', '$DataComent')";

    if(mysqli_query($connect, $sql)){
        echo '<script>window.history.back(2)</script>';
    }else{
        echo '<script>windows.history.back(2)</script>';
    }


?>