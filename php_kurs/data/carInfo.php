<?php 
require("db.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $cars = array_filter($db, function($el){
            global $id;
            return $el['id'] == $id;
        } );
      
    }else if($_GET['search']){
        $search = $_GET['search'];
        $cars = array_filter($db, function($el){
            global $search;
            return $el['brend'] == $search ||  $el['name'] == $search ||  $el['price'] == $search;
        } );

        if(count($cars) == 0){
            header("Location: index.php?error=1");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car info</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <a href="index.php" class="navbar-brand">Cars</a>
    </nav>

    <div class="jumbotron text-center">
        <?php foreach($cars as $car): ?>
            <span><?php echo $car['brend'];?></span>
        <?php endforeach; ?>
    </div>

    <div class="container-fluid">
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <?php foreach($cars as $car):?>
                           <div class="col-6" style="outline: 1px solid #ddd; padding-bottom:15px;">
                            <h3 class="display=4"><?php echo $car['name'] ?></h3>
                            <hr>
                            <p><?php echo $car['info']; ?></p>
                            <hr>
                            <button class="btn btn-primary"><?php echo $car['price']."$"; ?></button>
                            <button class="btn btn-<?php if($car['used']){
                                echo "warning";
                            }else{
                                echo "success";
                            } ?> float-right"><?php if($car['used']){
                                echo "Used";
                            }else{
                                echo "New";
                            }  ?></button>

                           </div> 
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
    </div>

    
    



</body>
</html>