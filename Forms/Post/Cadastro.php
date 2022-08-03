<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="post.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="panel">
            <h1>Crie tópicos de <span>discução!</span></h1>
            <!-- <img src="./img/undraw_launching_re_tomg.svg" alt=""> -->
        </div>
        <div class="post-form">
            <form action="Cadastra.php" method="POST">
                <div class="form-control">
                    <input type="hidden" name="idUser" value='<?php echo $_SESSION['login']; ?>'>
                    <input type="text" name="Titulo" placeholder="Titulo">
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
                </div>
                <div class="form-control">
                    <textarea name="Texto" cols="30" rows="10" placeholder="Texto"></textarea>
                    <div class="Actions">
                        <button type="submit">Postar</button>
                        <a href="../../User/Home.php">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>