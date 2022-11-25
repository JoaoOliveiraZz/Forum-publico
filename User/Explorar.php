<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Search.css">
    <script src="https://kit.fontawesome.com/9182e6fc8a.js" crossorigin="anonymous"></script>
    <title>Explorar</title>
</head>
<body>

    <header>
            <h2><a href="#" class="logo">
                <img src="Logo.png" alt="">
            </a></h2>
            <div class="navigation">
                <a href="#">Sobre</a>
                <a href="#">Contato</a>
                <a href="./Home.php">Home</a>
                <a href="../Forms/Login.php?logout">Sair</a>
            </div>
    </header>


    <!-- <div class="Search">
        <form method="POST" action="./Explorar.php" class="Search">
            <input type="submit" name="Search"></input>
        </form>
    </div> -->
    
    <div class="Search">
        <form action="./Explorar.php" method="POST">
            <input type="text" name="Pesquisa" placeholder = <?php 
            
                if(isset($_POST['Pesquisa']) && $_POST['Pesquisa'] != ''){
                    echo $_POST['Pesquisa'];
                }else{
                    echo 'Pesquisa';
                }
            
            ?> >
            <button name="Search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></butt>
        </form>
    </div>


    <?php

        include('../Database/connection.php');
        $pesquisou = 0;
    
        if(isset($_POST['Search'])){

            $pesquisou = 1;
            
           $pesquisa = $_POST['Pesquisa'];
           
           $sqlTitle = "SELECT * FROM post WHERE Titulo LIKE '%".$pesquisa."%'";
        //    echo $sqlTitle;

           $result = $connect -> query($sqlTitle);
 

        }
        
    ?>

    <div class="Resultados">
        <div class="header">
            <h1>Resultados para: <span><?php 
                if(isset($pesquisa) && $pesquisa != "" && $result -> num_rows != 0){
                    echo $pesquisa;
                }else{
                    echo "Ainda não há resultados para a sua pesquisa";
                }
            
            ?></span></h1>
            
        </div>
        <div class="link">
        <?php if($pesquisou && $pesquisa != '' && $result -> num_rows != 0){
            while($DataPost = mysqli_fetch_assoc($result)){          
                    echo "<a href='../Post/Post.php?id=$DataPost[id]'>". $DataPost['Titulo'] ."</a>";
               }
        }else{

            echo "<img src='img/Design sem nome (2).png' alt='Sem pesquisa'>";
            // echo "<script src='scriptExplorar.js'></script>";
            // echo 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum blanditiis officiis inventore iure quaerat exercitationem necessitatibus laborum accusamus nam numquam saepe cumque, quam modi nulla consequuntur magnam, ad doloribus corporis.';

        }?>
        </div>
    </div>    
</body>
</html>