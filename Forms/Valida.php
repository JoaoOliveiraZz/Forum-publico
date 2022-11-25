<?php

    $Email = (isset($_POST['Email'])) ? $_POST['Email'] : '';
    $Senha = (isset($_POST['Senha'])) ? $_POST['Senha'] : '';

    if($Email == '' || $Senha == ''){
        echo "<script>
            alert('Preencha todos os campos')
        </script>";
    }else{

        $Senha = md5($Senha);
        $sql = "SELECT * FROM Usuario where Email = '$Email' AND Senha = '$Senha'";
        $result = $connect -> query($sql);

        $DataUser = mysqli_fetch_assoc($result);


        if($result -> num_rows != 0){
                if($DataUser['Perfil'] == 1){
                    $_SESSION['adm'] = $DataUser['id'];
                }else{
                    $_SESSION['login'] = $DataUser['id'];
                }
                // header('location: Login.php');
        }else{
            echo "<script>
                alert('Login inválido, tente novamente')
            </script>";
        }

    }

?>