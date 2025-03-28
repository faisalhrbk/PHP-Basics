<!-- isset() function returns true if varibale is declared and not null  false bhe true hai iskayliye-->
 <!-- empty()returns true if varialble is not decalered false and null -->

 <!-- true = 1 and false = 0 -->
  <!-- <?php
$username = false;
echo isset($username);

// if (isset($username)){
//     echo"this variable is set <br>";
// } else{
//     echo"this variable is not set'<br>";
// }
// if(empty($username)){
//     echo"this variable is empty <br>";
// }else{
//     echo"this variable is not empty <br>";
// }

  ?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset and empty</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">name:<input type="text" name="name"></label> <BR>
        <label for="">password:<input type="password" name="password"></label>
        <input type="submit" name="login" value="logIn">
    </form>
</body>
</html>
<?php

// foreach($_POST as $key => $value){

//     echo $key . " =" . $value . "<br>";
// }

if(isset($_POST["login"])) {
    $username = $_POST["name"];
    $password = $_POST["password"];

    if(empty($username)){
        echo"user name is missing";
    }
    elseif(empty($password)){
        echo"password is missing";
    }
    else{
        echo"hello {$username} <br>";
    }
}

?>



