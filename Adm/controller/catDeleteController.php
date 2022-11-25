<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM post where id='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Category Item Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>