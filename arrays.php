<!-- arrays js mai square bracks mai aur yaha round brackets mai variable name = array(); aur indexing square brackes mai  direct array print nahi karway skte but we can do through for each loop-->
<!-- 
 

 
 <?php 

$foods = array("apple", "banana", "mango", "orange", "grapes");

$foods[3] = "pizza";

// array_push() is a method of array which add the value at the end we can add more than one value
// array_push($foods, "chocolate", "kiwii");


// will remove last element in the array
// array_pop($foods);

// will remove first element in the array
//  array_shift($foods);

// can reverse an array it will work when we assign it to new array or same name
//  $reversedarray = array_reverse($foods);

// can count the emements in the array yaha loop li zarurat nahi
echo count($foods) . "<br>";

foreach($$foods as $food){
    echo $food . "<br>";
}
?> -->



<!-- associative array = an array made of key:value pairs  to change array to associavtive arry add an arrow after every element eg "pakistan"=>"isb", "india"=>"dehli",-->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action="index.php" method="post">
        <label for="">enter a country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
    
 </body>
 </html>
 <?php
$captials = array("usa"=>"washington", "pakistan"=>"islamabad", "india"=>"new delhi" );

// to change the key value
$captials["usa"] = "new york";


// to add new key value
$captials["china"] = "beijing";


// to get all array keys it will pass to new array
// $keys = array_keys($captials);
// foreach($keys as $key){
//     echo $key . "<br>";
// }
// to get all array (key) values 
// $values = array_values($captials);
// foreach($values as $value){
//     echo $value . "<br>";
// }


// can flip the array keys or values key will be value
//  $captials = array_flip($captials);
//  foreach($captials as $key => $value){
//         echo $key . $value . "<br>";
//     }

// echo $captials["pakistan"] . "<br>";

// same as to print all values we use foreach loop

// foreach($captials as $key => $key){
//     echo $key . " capital is " . $value . "<br>";
// }


// exercise
 $captial = $captials[ $_POST["country"]];

echo $captial;

 ?>