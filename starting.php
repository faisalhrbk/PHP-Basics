bismillah to php 
20feb 2025

<!-- <?php

        // variables in php
        $food = "biryani";
        $name = "faisal hunzai";
        $email = "fake@aekf.com";

        // whole int

        $age = 300;
        // floats in php
        $height = 3.4;
        $price = 3.99;

        // booleans in php  true = 1 show hoga aur false kuch nahi webpage pe
        $is_avaliable = true;
        $is_online = false;
        $is_new = true;

        echo "hello {$name} <br>";


        echo "i like $food <br>";
        echo "my email is $email <br>";
        echo "im $age years old <br>";


        echo "im $height meters tall <br>";

        echo "the price is \${$price} <br>";

        echo "i am available {$is_avaliable} <br>";
        echo "i am online {$is_online} <br>";
        echo "i am new {$is_new} <br>";
        ?>  -->

<!-- how to sum variablesss -->


<!-- <?php

        $num1 = 20;
        $num2 = 30.4;
        $total = "";

        $total = $num1 + $num2;

        echo "{$num1} + {$num2} <br>";
        echo "this is the total  = \${$total} <br>";

        ?> -->

<!-- basic arthemetic operations  + - % *-->

<!-- <?php

        // $x = 10;
        // $y = 3;
        // $z = null;

        // $z = $x + $y;
        // $z = $x - $y;
        // $z = $x ** $y;
        // $z = $x % $y;
        //  echo $z

        // increment and decrement

        $counter = 10;

        // $counter++;
        $counter -= 2;
        echo $counter;


        ?> -->


<!-- operator precedence > order of operations -->

<!--  "BRACKETS **(wxponents) * / % + -" -->
<!-- <?php


        echo "hellow woSrld";
        ?> -->

<!-- _GET and _POST  special-varibale  to collect data form html form action attribute post is better-->

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label >user name:</label>
        <input type="text" name="name">
        <br>
        <label>password</label>

        <input type="password" name="password">
        <br>
        <input type="submit" value="log in">
    </form>
</body>

</html>
<?php

// echo "{$_GET["name"]} <br>"; 
// echo "{$_GET["password"]} <br>"; 
echo "{$_POST["name"]} <br>";
echo "{$_POST["password"]} <br>";

?> -->




<!-- Exercise -->

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>


<form action="index.php" method="post">

<label for="">quantity:</label>
<br>
<input type="text" name="quantity">
<br>
<input type="submit" value="total">
</form>

</body>

</html>


<?php



$item = "pizzaaaaa";
$price = 10;

$quantity = $_POST["quantity"];

$total = null;

$total = $quantity * $price;

echo"you have orderd {$quantity} x  {$item} <br>";

echo "total amount is \${$total} <br>";

?>