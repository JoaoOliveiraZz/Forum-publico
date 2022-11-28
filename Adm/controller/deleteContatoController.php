<?php

include_once "../config/dbconnect.php";

$id = $_POST['record'];
$query = "DELETE FROM contato WHERE id_contato='$id'";

if (mysqli_query($conn, $query)) {
    echo "Contato deletado";
} else {
    echo "Não foi possível deletar";
}
?>