<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php 
    
        //array
        //object
        //resource

        $numbers = [1,2,3,4,5];
        $numbers2 = Array(6,7,8,9);
        $mix = ["Danilo", 40, false, null, [100, 200, 300]];

        echo "<pre>";
        var_dump($numbers);
        echo "</pre>";

        echo "</br>";
        echo $numbers[0];
        echo "</br>";


        echo "<pre>";
        var_dump($mix);
        echo "</pre>";
        echo "</br>";

        echo "<h1>$mix[0]</h1>";
        echo "</br>";

        var_dump($mix[4][1]);
        echo "</br>";

        $loto_brojevi = [12, 34, 23];
        $loto_brojevi[] = 700;

        echo "<pre>";
        var_dump($loto_brojevi);
        echo "</pre>";

        unset($loto_brojevi[1]);
        echo "<pre>";
        var_dump($loto_brojevi);
        echo "</pre>"





    
    
    
    
    
    
    
    ?>
</body>
</html>