<!-- input ko sanatiza krna sql injection wagira || validate input-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sanatiza and validate</title>
</head>

<body>


    <form action="index.php" method="post">

        username: <br>
        <input type="text" name="username">
        <br>

        age: <br>

        <input type="text" name="age">
        <br>

        email: <br>

<input type="text" name="email">
        <input type="submit" value="login" name="login">
    </form>
</body>

</html>

<?php
// if (isset($_POST['login'])) {
//     $username = $_POST['username'];
//     echo" hello $username";
// }

// upwer wala direct method tha user se input lene ka abhi hum function kay zareye input text/values ko sanatiza karengy,,, 3 para ley ga pehla input hen post or get(form kay mutabik) 2nd input name, 3rd type of filter AUR BHE FILTERS HEIN 
if (isset($_POST['login'])) {
    // $username = filter_input(
    //     INPUT_POST,
    //     'username',

    //     FILTER_SANITIZE_SPECIAL_CHARS
    // );
    // $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    // echo "YOU ARE $age YEARS OLD <br>";

    // $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    // echo "YOUR EMAIL IS $email <br>";



    //  validation

    // $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    // if (empty($age)){
    //     echo"thatnum is no valid";
    // }

    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if(empty($email)){
        echo"that email is no valid";
    } else{
        echo "your email is $email <br>";
    }
  
}


?>