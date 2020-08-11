<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assoc Array</title>
</head>
<body>
    <?php 
        $student = ["js"=>8, "php"=>10, "html"=>9];

        echo "<pre>";
        var_dump($student);
        echo"</pre>";

        echo "<p> JavaScript: ".$student["js"]."</p>";

        $student["python"] = 6;
        echo "<pre>";
        var_dump($student);
        echo"</pre>";

        unset($student["html"]);

        echo "<pre>";
        var_dump($student);
        echo"</pre>";










    ?>
</body>
</html>