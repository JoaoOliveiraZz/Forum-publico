<?php

use function PHPSTORM_META\sql_injection_subst;

session_start();
include_once('../Database/connection.php');

$idPost = $_GET['id'];
$idUser = $_SESSION['login'];

$sql = "SELECT * FROM Post WHERE id = '$idPost'";

$result = $connect->query($sql);

$PostData = mysqli_fetch_assoc($result);

$ComentQuery = "SELECT * FROM Comentarios WHERE post_id = '$idPost'";

$comentResult = $connect->query($ComentQuery);

$count = 0;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="post.css">
    <title><?php echo $PostData['Titulo']; ?></title>
</head>

<body>

    <header>
        <h2>For(um)</h2>
        <div class="navigation">
            <a href="../index.php">Sobre</a>
            <a href="../Forms/contato/contatoForm.php">Contato</a>
            <a href="../User/Explorar.php">Explorar</a>
            <a href="../Forms/Login.php?logout">Sair</a>
        </div>
    </header>


    <div class="box">
        <div class="post">
            <div class="header">
                <h2>
                    <?php echo "<p>" . $PostData['Titulo'] . "</p>"; ?>
                </h2>
                <p>
                    <?php echo "<p class='Lang'>" . $PostData['Linguagem'] . "</p>"; ?>
                </p>
                <img src="" alt="" class="image">
            </div>
            <div class="body">
                <p>
                    <?php echo "<p>" . $PostData['Texto'] . "</p>"; ?>
                </p>
            </div>
            <div class="footer">
                <button class="comentar">Comentar</button>
                <small> <?php echo "Publicado em: " . $PostData['DataPub']; ?> </small>
            </div>
        </div>
    </div>

    <!-- Modals -->

    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Comentar </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="../Post/Comentar/Comentar.php" method="POST">

                    <div class="modal-body">
                        <input type="hidden" name="Id" value=<?php echo $idPost; ?>>
                        <input type="text" name="Comentario" placeholder="Proponha a sua solução aqui">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancelar </button>
                        <button type="submit" name="deletedata" class="btn btn-primary">Comentar </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="comentarios">

        <?php
        while ($comentData = mysqli_fetch_assoc($comentResult)) {

            echo " <div class='comentario'>";

            echo "<div class='header'>";

            $userComent = $connect->query("SELECT * FROM Usuario WHERE id = '$comentData[user_id]'");
            $userName = mysqli_fetch_assoc($userComent);
            echo "<p class='nome'>" . $userName['Nome'] . "</p>";
            echo "<p class='data'>" . $comentData['DataComent'] . "</p>";

            echo "</div>";
            echo "<div class='texto'>";
            echo "<p>" . $comentData['Texto'] . "</p>";
            echo "</div>";

            echo "</div>";
        }
        ?>

    </div>

    <!-- Scripts -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="modal.js"></script>
    <script src="imageTransform.js"></script>
    <!-- <script>
        let body = document.querySelector('body');
        while(true){
            body.style.background = "";
        }
    </script> -->





</body>

</html>