<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'danilodb') or die("Connection error!");
    
    $sql = "SELECT * FROM names";
    $query = mysqli_query($conn, $sql); //mysql result set

    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    // echo "<pre>";
    // var_dump($result);
    // echo "</pre>";

    foreach($result as $row){
        echo $row['name']."<hr>";
    }

    mysqli_close($conn);

?>