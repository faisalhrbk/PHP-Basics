<!-- radio buttons -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>radio btns adn chexk boxes</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="radio" name="creditcard" value="visa">
        visa<br>
        <input type="radio" name="creditcard" value="mastercard">
        mastercard<br>
        <input type="radio"  name="creditcard" value="amex">
        amex<br>

        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>

<?php
if (isset($_POST['confirm'])) {
    $creditCard = null;
    if (isset($_POST["creditcard"])) {
        $creditCard = $_POST["creditcard"];
        // echo $_POST["creditcard"];
    }
    switch ($creditCard) {
        case "visa":
            echo "you selected visa";
            break;
        case "mastercard":
            echo "you selected mastercard";
            break;
        case "amex":
            echo "you selected amex";
            break;
        default:
            echo "please make a selection";
            break;
    }
}
// else{
//     echo"no card selected";
// }
//     if($creditCard == "visa"){
//         echo"you selected visa";

// }elseif ($creditCard =="mastercard") {
//     echo"you selected mastercard";
// }
// elseif ($creditCard =="amex") {
//     echo"you selected amex";
// }
// else{
//     echo"please make a selection";
// }
// }


// we will use switch for our ease




?> -->




<!-- checkboxes in php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check box</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">
        pizza element <br>
        <input type="checkbox" name="hamburger" value="Hamburger">
        hamburger element <br>
        <input type="checkbox" name="hotdog" value="Hotdog">
        Hotdog element<br>
        <input type="checkbox" name="taco" value="Taco">
        taco<br>

        <input type="submit" name="confirm" value="confirm">
    </form>
</body>

</html>

<?php
if(isset($_POST['confirm'])){

if(isset($_POST['pizza'])){
    echo"you selected pizza";

}
if(isset($_POST['hamburger'])){
    echo"you selected hamburger";

}
if(isset($_POST['hotdog'])){
    echo"you selected hotdog";

}
if(isset($_POST['taco'])){
    echo"you selected taco";

}
else{
    echo"please make a selection";
}
}

?>