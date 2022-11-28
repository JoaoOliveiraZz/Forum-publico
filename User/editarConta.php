<?php


    include('../Database/connection.php');

    $Nome = $_POST['nome'];
    $Email = $_POST['email'];
    $Idade = $_POST['idade'];
    $FavLang = $_POST['lang'];
    $id = $_POST['Id'];

    $update = "UPDATE usuario SET Nome = '$Nome', Email = '$Email', Idade = '$Idade', FavLinguagem = '$FavLang' WHERE id = $id";

    echo $update;



    if(mysqli_query($connect, $update)){
        header('Location: Home.php');
    }else{
        // header('Location: Home.php?error');
    }















?>