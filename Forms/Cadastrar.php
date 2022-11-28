<?php

    include_once('../Database/connection.php');

    $Nome = $_POST['Nome'];
    $Email = $_POST['Email'];
    $Senha = md5($_POST['Senha']);
    $Idade = $_POST['Idade'];
    $Linguagem = $_POST['LinguagemFav'];

    $sql = "INSERT INTO Usuario (Nome, Email, Senha, Idade, FavLinguagem, Perfil) VALUES ('$Nome','$Email','$Senha','$Idade','$Linguagem', 2)";

    if(mysqli_query($connect, $sql)){
        header('location: Login.php');
    }else{
        echo "<script>
            alert('Seu cadastro deu errado, verifique se preencheu todos os campos. Se o problema persistir entre em contato com o nosso admnistrador')
        </script>";
    }


?>