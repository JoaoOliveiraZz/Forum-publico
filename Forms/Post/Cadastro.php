<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="post-form">
            <form action="Cadastra.php" method="POST">
                <input type="hidden" name="idUser" value='<?php echo $_SESSION['login']; ?>'>
                <input type="text" name="Titulo" placeholder="Titulo" value='aaaaaaa'>
                <textarea name="Texto" cols="30" rows="10" placeholder="Texto"></textarea>
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
                <button type="submit">Postar</button>
            </form>
        </div>
    </div>
    
</body>
</html>