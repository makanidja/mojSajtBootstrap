<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vezba 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="navbar navbar-expand navbar-light bg-light">
        <a href="#" class="navbar-brand">PHP VEZBA 1</a>

        <ul class="navbar-nav">
            <?php 
                $links = ["Home", "About", "Gallery", "Prices", "Contact"];
                // for($i = 0; $i < count($links); $i++){
                //     echo'<li nav-item><a href="#" class="nav-link">'.$links[$i].'</a></li>';
                    
                // }
            
            ?>
            

            <?php for($i = 0; $i < count($links); $i++): ?>
                <li nav-item><a href="#" class="nav-link"><?php echo $links[$i] ?></a></li>
            <?php endfor ?>
            



        </ul>
        
    </div>
    
</body>
</html>