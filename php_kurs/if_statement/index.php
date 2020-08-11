<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statement</title>
</head>
<body>
    <?php 

    $numbers = [1, 2, 3, 4, 5];

    if(count($numbers) > 0){
        $sum = 0;
        foreach($numbers as $number){
            $sum = $sum + $number;
        }

        echo "Total: ".$sum;
    }else{
        echo "Total: 0";
    }

    echo "</br>";
    echo "<hr>";

    $num = 2;
    if($num == 1){
        echo "Number je  1";
    }else if($num == 2){
        echo "Number je  2";
    }else if($num == 3){
        echo "Number je  3";
    }else{
        echo "Number nije 1 -3";
    }
    
    echo "</br>";
    echo "<hr>";


    $username = "Maka";
    $password = "secret";

    if($username == "Maka"){
        if($password == "secret"){
            echo"Welcome $username";
        }else{
            echo "Wrong password";
        }
    }else{
        echo "Wrong username";
    }


    
    
    ?>
</body>
</html>