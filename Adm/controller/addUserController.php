<?php

    include_once('../config/dbconnect.php');

    $Nome = $_POST['nome'];
    $Email = $_POST['email'];
    $Senha = md5($_POST['senha']);
    $Idade = $_POST['idade'];
    $Lang = $_POST['lang'];

    $query = "INSERT INTO usuario (Nome, Email, Senha, Idade, FavLinguagem) VALUES ('$Nome', '$Email', '$Senha', '$Idade', '$Lang')";

    if(mysqli_query($conn, $query)){
        header('Location: ../index.php');
    }else{
        header("Location: ../index.php?error");
    }












?>