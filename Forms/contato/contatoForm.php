<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cadastro.css">
    <title>Contato</title>
</head>

<body>

    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form class="sign-in-form" method='Post' action="contato.php">
                    <h2 class="title">Contato</h2>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="Titulo" placeholder="Título" required>
                    </div>

                    <i class="fas fa-lock"></i>
                    <textarea name="Texto" cols="30" rows="10" placeholder="Digite aqui o seu texto de contato"></textarea>

                    <input type="submit" value="Enviar" class="btn" name='logado'>
                </form>
            </div>
            <div class="panels-container">
                <div class="panel panel-left">
                    <div class="content">
                        <h3>Novo por aqui?</h3>
                        <p>Encontrou problemas no nosso sistema ou está insatsisfeito com algo? Envie um formulário de contato para nós. Isso ajudará os nossos admnistradores a manter o site sempre ativo e sem problemas que atrapalhem a sua experiência. Ou se preferir, volte à <a href="../../User/Home.php">Home</a>
                        </p>
                    </div>
                    <img src="../img/contato.svg" alt="Tablet" class="image" />
                </div>
            </div>
        </div>

        <script>
            if (window.location.href.indexOf("error") > -1) {
                alert('Erro ao enviar, tente novamente')
            }
        </script>



</body>

</html>