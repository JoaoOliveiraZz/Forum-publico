<?php
session_start();
include_once('../Database/connection.php');

// echo 'Olá '.$_SESSION['login'].'. Bem vindo de volta!';
// echo "<a href='?logout'>Logout</a>";
// echo "<a href='../index.php'>Home Page</a>";

$id = $_SESSION['login'];
$sql = "SELECT * FROM Usuario WHERE id = $id";

// echo $sql;

$result = $connect->query($sql);

//Posts do usuário

$sqlPost = "SELECT * FROM Post WHERE idUser = '$id'";

$post = $connect->query($sqlPost);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Perfil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <title>Perfil</title>
</head>

<body>

    <header class="navbar bg-ligth">
        <h2>For(um)</h2>
        <div class="navigation">
            <a href="../index.php">Sobre</a>
            <a href="../Forms/contato/contatoForm.php">Contato</a>
            <a href="./Explorar.php">Explorar</a>
            <a href="../Forms/Login.php?logout">Sair</a>
        </div>
    </header>


    <div class="box">
        <div class="Name">
            <h2>
                Bem vindo de volta,
                <?php
                $UserData = mysqli_fetch_assoc($result);
                echo '<span>' . $UserData['Nome'] . '!</span>';
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
                <button class="editar" onclick="$('#editmodal').modal('show');">Editar</button>
                <button class="excluir" onclick="$('#deletemodal').modal('show');">Excluir</button>
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
            while ($UserPost = mysqli_fetch_assoc($post)) {
                echo "<div class='post'>";
                echo "<a class='postLink' href='../Post/Post.php?id=" . $UserPost['id'] . "'>" . $UserPost['Titulo'] . "</a>";
                echo "<a href='../Post/deletePost.php?id=$UserPost[id]'>Deletar</a>";
                echo "</div>";
            }
            ?>
            <a href="../Post/Post.php?id"></a>
        </div>
    </div>
    <div class="box">
        <div class="Name">
            <h2>
                Tópicos recentes sobre <?php
                                        echo "<span>" . $UserData['FavLinguagem'] . "!</span>";
                                        ?>
            </h2>
            <div class="Posts">
                <?php

                $Lang = $UserData['FavLinguagem'];

                $sqlFav = "SELECT * FROM Post WHERE Linguagem = '$Lang' ORDER BY DataPub DESC";

                $langPost = $connect->query($sqlFav);

                $Contador = 0;

                while ($LangFav = mysqli_fetch_assoc($langPost)) {
                    echo "<a class='postLink' href='../Post/Post.php?id=" . $LangFav['id'] . "'>" . $LangFav['Titulo'] . "</a>";
                    $Contador++;
                    if ($Contador == 5) {
                        break;
                    }
                }

                ?>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Tem certeza que deseja deletar a sua conta? </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="excluirConta.php" method="POST">

                    <div class="modal-body">
                        <input type="hidden" name="Id" value=<?php echo $_SESSION['login']; ?>>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancelar </button>
                        <button type="submit" name="deletedata" class="btn btn-primary">Deletar </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- Edit modal -->
    <div class="modal fade" id="editmodal" role="dialog" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Novo Usuário</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form enctype='multipart/form-data' action="./editarConta.php" method="POST">
            <input type="hidden" name="Id" value="<?php echo $UserData['id']?>">
            <div class="form-group">
              <label for="c_name">Nome</label>
              <input type="text" class="form-control" name="nome" value="<?php echo $UserData['Nome']?>"required>
            </div>
            <div class="form-group">
              <label for="c_name">Email</label>
              <input type="email" class="form-control" name="email" value="<?php echo $UserData['Email']?>" required>
            </div>
            <div class="form-group">
              <label for="c_name">Senha</label>
              <input type="password" class="form-control" name="senha" disabled  value="<?php echo $UserData['Senha']?>" required>
            </div>
            <div class="form-group">
              <label for="c_name">Idade</label>
              <input type="number" class="form-control" name="idade"  value="<?php echo $UserData['Idade']?>" required>
            </div>
            <div class="form-group">
              <select name="lang" required>
                <?php echo "<option value='$UserData[FavLinguagem]'>$UserData[FavLinguagem]</option>"; ?>
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
            </div>

            <div class="form-group">
              <div class="form-group">
                <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Editar</button>
              </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>

    </div>
  </div>
    <div class="space"></div>
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

</body>

</html>
