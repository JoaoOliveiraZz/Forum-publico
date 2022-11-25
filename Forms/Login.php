<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<?php

    include_once('../Database/connection.php');

    if(!isset($_SESSION['login']) && !isset($_SESSION['adm'])){

        if(isset($_POST['logado'])){

            include('Valida.php');

        }
        include('../Forms/Cadastro.php');
        
    }else{

        if(isset($_GET['logout'])){
            if(isset($_SESSION['adm'])){
                unset($_SESSION['adm']);
            }else{
                unset($_SESSION['login']);
            }
            session_destroy();
            header("location: Login.php");
        }else{
            // if($_SESSION['login'] == 1){
            //     header('Location: ../Adm/Dashboard.php');
            // }else{
            //     header('Location: ../User/Home.php');
            // }
            if(isset($_SESSION['adm'])){
                header('Location: ../Adm/index.php');
            }else{
                header('Location: ../User/Home.php');
            }
        }
        //JoaoVictor9742@gxp
    }

?>
    
</body>
</html>