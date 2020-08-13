<?php 

    require("connection.php");
    
    $sql = "SELECT * FROM names";
    $query = mysqli_query($conn, $sql); //mysql result set

    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    require("index.view.php");

    ?>
    
  