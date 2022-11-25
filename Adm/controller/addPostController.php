<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $Titulo = $_POST['Title'];
        $Texto = $_POST['Text'];
        $Lang = $_POST['Lang'];
        $Id = 1;
        date_default_timezone_set('America/Sao_Paulo');
        $DataPost = date('Y-m-d H:i:s');
       
         $insert = mysqli_query($conn,"INSERT INTO post
         (idUser, Titulo, Linguagem, Texto, DataPub) 
         VALUES ('$Id', '$Titulo', '$Lang','$Texto', '$DataPost')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../index.php?posts=error");
         }
         else
         {   
             header("Location: ../index.php");
         }
     
    }
        
?>