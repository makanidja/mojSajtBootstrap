<?php 
    require("connection.php");
    $id = $_GET['id'];

    $sql = "SELECT * FROM names WHERE id = $id";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);
    

    require("update.view.php");


?>