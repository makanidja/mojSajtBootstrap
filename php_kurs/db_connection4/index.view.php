<form action="save_name.php" method="POST">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="sport" placeholder="sport">
        <button type="submit">Save</button>
    </form>
    
    <table style="border: 1px solid red; border-collapse: collapse; width:100%; text-align: center;">
    <tr style="border: 1px solid red">
        <th style='border: 1px solid red;'>Name</th>
        <th style='border: 1px solid red;'>Sport</th>
        <th style='border: 1px solid red;'>Delete</th>
        <th style='border: 1px solid red;'>Update</th>
  </tr>
   
    
    <?php foreach($result as $row): ?>
        <?php echo "<tr style='border: 1px solid red;'><td style='border: 1px solid red;'>".$row['name']."</td><td style='border: 1px solid red;'>".$row['sport']."</td><td>" ?><a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></td><td style='border: 1px solid red;'><a href="update.php?id=<?php echo $row['id'] ?>">Update</a></td></tr>



    <?php
    endforeach;
    mysqli_close($conn);

    ?>


</table>

