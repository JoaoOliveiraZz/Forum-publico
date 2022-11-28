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
                // Verificar log
                $issetLog = "SELECT * FROM Log WHERE user_id = '$DataUser[id]'";
                $result = $connect -> query($issetLog);
                if($result -> num_rows != 0){
                    $DataLog = date('Y-m-d H:i:s');
                    $log = "UPDATE Log SET login = '$DataLog', logoff = '0000-00-00 00:00:00' WHERE user_id = '$DataUser[id]'";
                }else{
                    $DataLog = date('Y-m-d H:i:s');
                    $log = "INSERT INTO Log (user_id, login, logoff) VALUES ('$DataUser[id]','$DataLog','0000-00-00 00:00:00')";

                }
                $insertLog = $connect -> query($log);
                header('location: Login.php');
        }else{
            echo "<script>
                alert('Login inválido, tente novamente')
            </script>";
        }

    }

?>