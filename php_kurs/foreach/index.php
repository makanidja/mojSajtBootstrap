<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <?php 
        $pets = ["Cat", "Fish", "Dor", "Mouse"];
        $peta_names = [
            "cat" => "Marla",
            "fish" => "Nemo",
            "dog" => "Max",
            "mouse" => "Mousy"
        ];

        foreach($pets as $pet){
            echo $pet. "</br>";
        }

        foreach($peta_names as $key => $value){
            echo $key." : ".$value. "</br>";
        }
    
    ?>
    <?php foreach($peta_names as $type => $name): ?>
        <h2><span style="color: purple;"><?php echo $type ?></span><?php echo $name ?></h2>
    <?php endforeach ?>



</body>
</html>