<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logicki operatori</title>
</head>
<body>
    <?php
        //&& || !

        $username = "Ivan";
        $password = "secret";
        $age = 30;

        if($username == "Ivan" && $password == "secret" || $age > 25){
            echo "Welcome $username";
        }

        echo "</br>";

        if($age != 25){
            echo "Age is not 25";
        }
    ?>

    
    <?php if($username != "Ivan" && $password != "secret"): ?>

        <form>
            <input type="text" name="" placeholder="username"></br>
            <input type="text" name="" placeholder="password"></br>
            
        </form>
    <?php endif; ?>
</body>
</html>