<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Index</title>
</head>

<body>

    <main>

        <?php

        if (isset($_SESSION['login'])) {
            include('NavLogado.php');
        } else {
            include('NavPadrao.php');
        }

        ?>

        <div class="content">
            <div class="info">
                <h2>For(um) de
                    <br>
                    <span>Programação</span>
                </h2>
                <p>Desfrute de uma plataforma feita especialmente para programadores. Na For(um) você encontra a resolução de seus problemas e também pode ajudar alguém que também esteja lutando contra os bugs</p>
                <a href="#sobre" class="infoBtn">Saiba mais</a>
            </div>
        </div>

    </main>
    <div class="call">
        <a href="#sobre"><img src="down-arrow.png" class="icon"></a>
    </div>

    <section id="sobre" class="sobre">
        <div class="content">
            <h1>
                Objetivos
            </h1>
            <p>
                A For(um) foi desenvolvida com o objetivo de facilitar o uso de um fórum de programação. Em seu desenvolvimento foram pensado os minímos detalhes para que o usuário tenha uma experiência única em nosso website. 
            </p>
            <p>
                Diferente de outros fóruns já existentes, a For(um) procura harmonizar a sua interface, prezando a leitura e a disposição dos elementos na tela para causar o maior conforto do usuário.
            </p>
        </div>
    </section>

    <div class="call">
        <a href="#Desenvolvido"><img src="down-arrow.png" alt="" class="icon"></a>
    </div>

    <section id="Desenvolvido" class="desenvolvido">
        <div class="content content-desenvolvedor">
            <h1>Desenvolvimento</h1>
            <p>
                A For(um) foi desenvolvida com ferramentas voltadas ao desenvolvimento Web. As linguagens de programação PHP, JavaScript e a ferramenta Ajax foram utilizadas para criar as interações do usuário com o site. O HTML e o CSS foram utlizados para criar as interfaces do usuário a fim de manter sempre a harmonia entre as telas.
            </p>
            <p>
                Além disso, o projeto é totalmente Open Source e está versionado no <a href="https://github.com/JoaoOliveiraZz/forum-publico">GitHub</a>.
            </p>
        </div>
    </section>

</body>

</html>