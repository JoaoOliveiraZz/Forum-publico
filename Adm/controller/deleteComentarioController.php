<?php

include_once "../config/dbconnect.php";

$id = $_POST['record'];
$query = "DELETE FROM comentarios WHERE id='$id'";

if (mysqli_query($conn, $query)) {
    echo "Comentário deletado";
} else {
    echo "Não foi possível deletar";
}
?>