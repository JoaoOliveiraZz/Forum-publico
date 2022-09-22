<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav.css">
    <title>Index</title>
</head>
<body>

    <section>

     <?php

        if(isset($_SESSION['login'])){
            include('NavLogado.php');
        }else{
            include('NavPadrao.php');
        }

    ?> 

    <div class="content">
        <div class="info">
            <h2>Like Nature
                <br>
                <span>Be criative!</span>
            </h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio ad ea in debitis quaerat ab praesentium minus porro est, cum culpa harum, repellat dolor labore vero ipsum magni molestiae aspernatur?</p>
            <a href="#" class="infoBtn">More info</a>
        </div>
    </div>
    
    </section>

    
</body>
</html>