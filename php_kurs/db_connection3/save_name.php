<?php 
    //connection
    require("connection.php");

    $name = $_POST['name'];
    $sport = $_POST['sport'];

    $sql = "INSERT INTO names VALUES (NULL, '$name', '$sport')";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('Location: index.php');
    }




?>