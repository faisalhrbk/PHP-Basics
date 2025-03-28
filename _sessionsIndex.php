
<!-- sessions super global variable once session creared this assigns a user a session id to visit multiple pages after sign in eg facebook -->
<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <!-- this is the login page <br>
    <a href="home.php">  this goes to home page</a>
   -->

   <form action="index.php" method="post">

   username: <br>
   <input type="text" name="name"><br>
   password: <br>
   <input type="password" name="pass"><br>
   <input type="submit" value="login" name="login">
   </form>
</body>
</html>

<?php
// $_SESSION["name"] = "fai";
// $_SESSION["pass"] = "123";

if (isset($_POST["login"])) {
   
    if(!empty($_POST["name"]) && !empty($_POST["pass"])){
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["pass"] = $_POST["pass"];

        // echo $_SESSION["name"] . "<br>";
        // echo $_SESSION["pass"] . "<br>";

        // header(location: file ka naam.php) this function will redirect us to a desired page
        header("location:home.php");
    }
    else{
        echo "please fill all the fields";

} }

?>