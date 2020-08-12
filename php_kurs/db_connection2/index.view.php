<form action="save_name.php" method="POST">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="sport" placeholder="sport">
        <button type="submit">Save</button>
    </form>
    
    <table style="border: 1px solid red; border-collapse: collapse; width:100%; text-align: center;">
    <tr style="border: 1px solid red">
        <th>Name</th>
        <th>Sport</th>
  </tr>
   
    
    <?php

    foreach($result as $row){
        echo "<tr style='border: 1px solid red;'><td>".$row['name']."</td><td> ".$row['sport']."</td></tr>";
    }

    mysqli_close($conn);

?>


</table>

