<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
<?php

    $counter = 0;



    while($counter < 5){
        echo"<h1> $counter: Ucimo PHP</h1></br>";
        $counter++;
    }


    $name = ["Ana", "Milica", "Natasa", "Jovana", "Milena", "Nikolija", "Ivana"];

    for($i = 0; $i < count($name); $i++){
        echo"<h1> $i: $name[$i] </h1></br>";
    }










?>
    
</body>
</html>