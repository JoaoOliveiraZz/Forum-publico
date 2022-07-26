<?php

    $Email = (isset($_POST['Email'])) ? $_POST['Email'] : '';
    $Senha = (isset($_POST['Senha'])) ? $_POST['Senha'] : '';

    if($Email == '' || $Senha == ''){
        echo 'Preencha todos os campos!';
    }else{

        $sql = "SELECT * FROM Usuario where Email = '$Email'";
        $result = $connect -> query($sql);

        $DataUser = mysqli_fetch_assoc($result);

        $Senha = md5($Senha);

        if($Email == $DataUser['Email'] && $Senha == $DataUser['Senha']){
            $_SESSION['login'] = $DataUser['id'];
            header('location: Login.php');
        }else{
            echo 'Não Logado';
        }


    }

    


?>