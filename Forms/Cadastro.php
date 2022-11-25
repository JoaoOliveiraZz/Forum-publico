<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="./cadastro.css">
    <title>Cadastro</title>
</head>

    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form class="sign-in-form" method='Post'>
                    <h2 class="title">Login</h2>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="Email" placeholder="Email" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="Senha" placeholder="Senha" required>
                    </div>
                    <input type="submit" value="login" class="btn" name='logado'>
                </form>
            </div>
            <div class="signup-signup">
                <form class="sign-up-form" method="Post" action="Cadastrar.php">
                    <h2 class="title">Cadastro</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="Nome" placeholder="Nome" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="Email" placeholder="Email" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="Senha" placeholder="Senha" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-calendar-alt"></i>
                        <input type="number" name="Idade" placeholder="Idade" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-laptop-code"></i>
                        <input type="text" name="LinguagemFav" placeholder="Linguagem Favorita" required>
                    </div>
                    <input type="submit" value="Cadastro" class="btn">
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel panel-left">
                <div class="content">
                    <h3>Novo por aqui?</h3>
                    <p>Faça seu cadastro gratuitamente e venha fazer parte da nossa comunidade de programadores! Na For(um) você vai encontrar as soluções para os seus problemas de programação ou também poderá ajudar outros usuários a resolverem os seus Bugs. Ou se preferir, volte à <a href="../index.php">Home</a>
                    </p>
                    
                    <button class="btn transparent" id="sign-up-button">Cadastro</button>
                </div>
                <img src="img/Luana.svg" alt="Tablet" class="image" />
            </div>
            <div class="panel panel-rigth">
                <div class="content">
                    <h3>Um de nós</h3>
                    <p>Seja bem vindo de volta, programador. Já estavamos com saudades, faça login e venha desfrutar de nossa plataforma :)
                    </p>
                    <!-- <a href="../index.php">Voltar a Home</a> -->
                    <button class="btn transparent" id="sign-in-button">Login</button>
                </div>
                <img src="img/sapiens.svg" alt="Tablet" class="image">
            </div>
        </div>
    </div>
    
    
    

    <script src="animation.js"></script>
</body>
</html>