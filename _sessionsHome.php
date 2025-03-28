<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    this is the homoage page <br>

<br>
<hr>
  

    <form action="home.php" method="post">

    <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>

<?php

echo" name: {$_SESSION["name"]} <br>";
echo" password: {$_SESSION["pass"]} <br>";

if(isset($_POST["logout"])){

    // this is a function to end the session
    session_destroy();
    header("location:index.php");
}
?>