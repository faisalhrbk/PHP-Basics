<!-- INFORMATION ABOUT USER STORED IN USER WEB BORWSER FOR TARGET ADVWRTISE,  PREFENCESES and store NON SENSETIVE DATA -->

<?php

//  paramaters first is key: 2nd is value , 3rd is expiration time insec for one day 86400sex , 4th is file path "/" is defalult

setcookie("fav_name", "faisal", time() + 3600, "/");

setcookie("fav_drink", "coffee", time() + 36000, "/");

setcookie("fav_food", "cakee", time() + 3600 * 2, "/");

// to delete a cookie set time to -0

// to print each key value pair form a cookie

// foreach($_COOKIE as $key => $value){
//     echo "{$key} := {$value} <br>";
// }

if(isset($_COOKIE["fav_name"])){

    echo" by some nammesss this will show adv ac to cookies";
}else{
    echo"by no one";
}
?>
