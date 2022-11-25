<?php

    include_once "../config/dbconnect.php";
    
    $id = $_POST['record'];
    $query="DELETE FROM usuario where id='$id'";

    if(mysqli_query($conn,$query)){
        echo"Usuario Deletado";
    }
    else{
        echo "N";
    }
    
?>