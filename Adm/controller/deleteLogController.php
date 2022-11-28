<?php

    include('../config/dbconnect.php');

    $id = $_POST['record'];

    $query = "DELETE FROM Log WHERE id_log = '$id'";

    if(mysqli_query($conn, $query)){
        echo "Registro de Log deletado com sucesso";
    }else{
        echo "Ocorreu algum erro, tente novamente";
    }





?>