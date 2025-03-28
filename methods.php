<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="post">

    <label for="">x:</label>
    <input type="text" name="x">
    <br>
    <label for="">y:</label>
    <input type="text" name="y"><br>
    <label for="">z:</label>
    <input type="text" name="z">
    <br>
    <!-- <input type="submit" value="total"> -->

    <br>

    <label for="">radius
        <input type="number" name="radius">

        <br>
        <input type="submit" value="submit">
       
    </label>
    </form>

</body>

</html>


<?php 

$total = null;
 $x = $_POST["x"];
 $y = $_POST["y"];
 $z = $_POST["z"];
//  <!-- absolute value function abs($variable)  means converts negative to posotive-->
//  $total = abs($x);


// round function for round a number (floor and ceil ) down and up the number
// $total = round($x);

//  power function
// $total = pow($x, $y);

// square root function
// $total = sqrt($x);

//  max and min fun
// $total = max($x, $y, $z);
//  $total = min($x, $y, $z);

// pi function  give the pi  value
// $total = pi();

// random function generatees a random number in () we set min and max
// $total = rand(100, 300);

// echo $total;




//  exercise to calculate the area and vol of a circle

$radius = $_POST["radius"];
$circum = null;
$area = null;
$volume = null;
$volume = pi() * pow($radius, 3);
$volume = round($volume, 2);
//  2 means it will mulltiply two times
$area = pi() * pow($radius, 2);
$area = round($area, 2);
$circum  = 2 * pi() * $radius;
//  () cirum and 3 means it will round to 3 decimal
$circum = round($circum, 4);

echo" circumference is {$circum} cm <br>";
echo" area  is {$area} cm<2 <br>";

echo" volume  is {$volume} cm<3 <br>";


?>