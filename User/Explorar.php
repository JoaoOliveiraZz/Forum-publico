<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="explorar.css">
    <script src="https://kit.fontawesome.com/9182e6fc8a.js" crossorigin="anonymous"></script>
    <title>Explorar</title>
</head>
<body>

    <?php include('../navLogado.php'); ?>

    <div class="Search">
        <p>Procure o que precisa <span>Aqui</span></p>
        <form method="POST" action="./Explorar.php" class="Search">
            <input type="text" name="Pesquisa">
            <select name="Lang">
                        <option value="">Linguagem</option>
                        <option value="Js">Js</option>
                        <option value="PHP">PHP</option>
                        <option value="C++">C++</option>
                        <option value="Python">Python</option>
                        <option value="HTML">HTML</option>
                        <option value="CSS">CSS</option>
                        <option value="C#">C#</option>
                        <option value="Ruby">Ruby</option>
                        <option value="Sql">Sql</option>
                    </select>
            <input type="submit" name="Search"></input>
            <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
            </form>
    </div>


    <?php

        include('../Database/connection.php');
        $pesquisou = 0;
    
        if(isset($_POST['Search'])){

            $pesquisou = 1;
            
           $pesquisa = $_POST['Pesquisa'];
           $lang = $_POST['Lang'];
           
           $sqlTitle = "SELECT * FROM post WHERE Titulo LIKE '%".$pesquisa."%'";
        //    echo $sqlTitle;

           $result = $connect -> query($sqlTitle);
 

        }
        
    ?>

    <div class="Resultados">
        <?php if($pesquisou){
            while($DataPost = mysqli_fetch_assoc($result)){
                echo "<div class='link'>";
                    echo "<a href='../Post/Post.php?id=$DataPost[id]'>". $DataPost['Titulo'] ."</a>";
                echo "</div>";
               }
        }?>
    </div>

    <script>
        // let form = document.querySelector('.Search');

        // form.addEventListener('click', (e) =>{
        //     e.preventDefault();
        // })
    </script>
    
</body>
</html>