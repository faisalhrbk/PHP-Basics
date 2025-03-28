<!-- functions javascript mai padha hai wahi hein-->
<?php
// function happy ($name,$age){
//     echo"happy birthday to you {$name}  <br>";

//     echo"you are $age years old";
// }
// happy("faisla huznia", 30);

//  to check no is evne or odd

// function iseven($num)
// {
//     $result = $num % 2;
//    if ($result == 0) {
//        echo "$num is even";
//    } else {
//        echo "$num is odd";
//    }
// }

// iseven(5);

// ba paramaters mai uper data types defiens karsty hein
// function add(float $num1,int $num2)


//  string functions

$username = "Faisal Hunzai";
$phone = "1243-23-234";


// converts text to loweecase
  echo strtolower($username) . "<br>";

//   converts text to uppercase
  echo strtoupper($username) . "<br>";

//   removes before and after spaces
  echo trim($username) . "<br>";

//   string pad username kay bad 20 tk * pad kar dega
  echo str_pad($username, 20, "hello") . "<br>";

//   string replace, pehla argument ko second argument se replace kar dega aur 3rd variable hoga
  $fa = str_replace("-", "", $phone);
  echo $fa . "<br>";

//   string reverse
  echo strrev($username) . "<br>";

//   string shuffle
  echo str_shuffle($username) . "<br>";

//   string compare returns -1 0 1, if they are same gives zero and if not same gives 1
echo strcmp($username, $phone) . "<br>";

// string length
echo strlen($username) . "<br>";

// string position
echo strpos($username, "a") . "<br>";

// sub string 

//  aur bht se methods hein wo aram aram se padhunga
// string ko array mai convert krta hai
$fullname = explode(" ", $username);

foreach($fullname as $name){
    echo $name . "<br>";
}

// array ko strign mai convert kartahi
$names = array("mohammad", "faisal", "hunzai");
$fullname = implode("-", $names);
echo $fullname . "<br>";






?>