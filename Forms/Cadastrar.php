<?php

    include_once('../Database/connection.php');

    $Nome = $_POST['Nome'];
    $Email = $_POST['Email'];
    $Senha = md5($_POST['Senha']);
    $Idade = $_POST['Idade'];
    $Linguagem = $_POST['LinguagemFav'];

    $sql = "INSERT INTO Usuario (Nome, Email, Senha, Idade, FavLinguagem) VALUES ('$Nome','$Email','$Senha','$Idade','$Linguagem')";

    if(mysqli_query($connect, $sql)){
        header('location: ../index.php');
    }else{
        echo "Algo deu errado";
    }


?>