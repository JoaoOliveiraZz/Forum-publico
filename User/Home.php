<?php
    session_start();
    include_once('../Database/connection.php');

    // echo 'Olá '.$_SESSION['login'].'. Bem vindo de volta!';
    // echo "<a href='?logout'>Logout</a>";
    // echo "<a href='../index.php'>Home Page</a>";

    $id = $_SESSION['login'];
    $sql = "SELECT * FROM Usuario WHERE id = $id";

    // echo $sql;

    $result = $connect -> query($sql);

    //Posts do usuário

    $sqlPost = "SELECT * FROM Post WHERE idUser = '$id'";

    $post = $connect -> query($sqlPost);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Perfil.css">
    <link rel="stylesheet" href="Perfil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <title>Perfil</title>
</head>
<body>

    <?php include('navLogado.php') ?>

    <div class="box">
        <div class="Name">
            <h2>
                Bem vindo de volta, 
                <?php 
                    $UserData = mysqli_fetch_assoc($result);
                    echo '<span>'.$UserData['Nome'].'!</span>';
                ?>
            </h2>
        </div>
        <h3>Seus dados:</h3>
        <div class="Data">
            <div class="Data-Control">
                <p><i class="fas fa-envelope"></i> Email: 
                    <?php 
                        echo $UserData['Email'];
                    ?>
                </p>
            </div>
            <div class="Data-Control">
            <p><i class="fas fa-calendar"></i> Idade:
                    <?php 
                        echo $UserData['Idade'];
                    ?>
                </p>
            </div>
            <div class="Data-Control">
            <p> <i class="fas fa-laptop-code"></i> Linguagem favorita: 
                    <?php 
                        echo $UserData['FavLinguagem'];
                    ?>
            </p>
            </div>
            <div class="Actions">
                <a href="#">Editar</a>
                <a href="#">Excluir</a>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="header">
            <h2>Seus tópicos</h2>
            <a href="../Forms/Post/Cadastro.php"><img src="./img/add.png" alt=""></a>
        </div>
        <div class="Posts">
            <?php 
                while($UserPost = mysqli_fetch_assoc($post)){
                    echo "<a class='postLink' href=".$UserPost['id'].">".$UserPost['Titulo']."</a>";
                }
            ?>
        </div>
    </div>
    <div class="box">
        <div class="Name">
            <h2>
                Tópicos recentes sobre <?php
                    echo "<span>".$UserData['FavLinguagem']."!</span>";
                ?>
            </h2>
            <div class="Posts">
                <?php 

                    $Lang = $UserData['FavLinguagem'];
        
                    $sqlFav = "SELECT * FROM Post WHERE Linguagem = '$Lang' ORDER BY DataPub DESC";

                    $langPost = $connect -> query($sqlFav);

                    $Contador = 0;

                    while($LangFav = mysqli_fetch_assoc($langPost)){
                        echo "<a class='postLink' href='".$LangFav['id']."'>".$LangFav['Titulo']."</a>";
                        $Contador++;
                        if($Contador == 5){
                            break;
                        }
                    }

                ?>
            </div>
        </div>
    </div>
    
</body>
</html>

<!-- Anotar ideias

    Mudar com setAtribute do JS uma imagem personalizada da linguagem favorita do usuario!

-->
