<?php

    include_once('connection.php');

    $Nome = $_POST['nome'];
    $Email = $_POST['email'];
    $Senha = md5($_POST['senha']);
    $Idade = $_POST['idade'];
    $Lang = $_POST['lang'];

$sql = "INSERT INTO usuario (Nome, Email, Senha, Idade, FavLinguagem) VALUES ('$Nome', '$Email', '$Senha', '$Idade', '$Lang')";

    if(mysqli_query($connect, $sql)){
        header('location: cadastro.html');
        mysqli_close($connect);
    }else{
        echo 'Deu erro, meu chapa';
        mysqli_close($connect);
    }
?>