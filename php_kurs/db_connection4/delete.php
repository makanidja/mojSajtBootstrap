<?php 
    require("connection.php");
    $id = $_GET['id'];

    $sql = "DELETE FROM names WHERE id = $id";
    $query = mysqli_query($conn, $sql);

    header("Location: index.php");
?>