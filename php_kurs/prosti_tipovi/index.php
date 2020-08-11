<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prosti tipovi podataka</title>
</head>
<body>

<?php
// numbers
// boolean
// null

$num = 12;
$num2 = 25.33;
$sum  = $num + $num2;
$name = "Makica";


var_dump($sum);
echo "</br>";
var_dump($num);
echo "</br>";
var_dump($name);
echo "</br>";

echo $sum;
echo "</br>";

echo 28 + 44 - 11 * 2 / 4;
echo "</br>";
echo 3 % 2;

echo "</br>";


$istina  = true;
$laz = false;

echo "True: ".$istina;
echo "</br>";
echo "False: ".$laz;
echo "</br>";

var_dump($istina);
echo "</br>";
var_dump($laz);
echo "</br>";

$job = null;
var_dump($job);


?>


</body>
</html>