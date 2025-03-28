<!-- <?php

        $age = 61;

        // if else ki order check kran agr ek chali toh nichy wali check hi nahi krti
        if ($age >= 18) {
            echo "you are 18!!";
        } elseif ($age <= 0) {
            echo "NOT A VALID AGE";
        } elseif ($age >= 60) {
            echo " you are to old to enter this ewbiste";
        } else {
            echo " you  must be 18  to enter";
        }
        //  agr value boolean ho toh direct value likh stke hein 
        echo "<br>";
        $isTrue = true;

        if ($isTrue) {
            echo "it is true";
        }

        echo "<br>";
        //  exercise to check the pay with over tiem
        $hours = 5;
        $rate = 15;
        $weekly = null;

        if ($hours <= 40) {
            $weekly = $hours * $rate;
        } elseif ($hours <= 0) {
            $weekly = 0;
        } else {
            $weekly = (40 * $rate) + ($hours - 40) * $rate * 1.5;
            echo "hellow";
        }
        echo "you made \${$weekly} this week  <br>";


        ?> -->


<!-- logical operators  combined with if else-->

<!--  && dono true hony chayea , ||  dono mai se ek true hona chayea,
  ! =   true if false, false if true-->

<!-- <?php
        $temp = 5;
        // if($temp >= 0 && $temp <= 30){
        //     echo"the weather is good";
        // }

        // if ($temp < 0 || $temp > 30) {
        //     echo"the weather is bad";
        // }

        $cloudy = false;

        if ($cloudy) {
            echo "the weather is good";
        } elseif (!$cloudy) {
            echo "the weather is sunn";
        }



        ?> -->

<!-- switch statments -->
<!-- replacment to ifelse statments lesscode to write -->

<?php
$grade = "pizza";
switch ($grade) {
    case "A":
        echo " you did great";
        break;
    case "B":
        echo " you did good";
        break;
    case "C":
        echo " you did ok";
        break;
    case "D":
        echo " you did poorly";
        break;
    case "F":
        echo " you did fail parh ley bsd";
        break;
    default:
        echo "{$grade} is not a valid grade";
}

echo "<br>";

$date = date("l");
switch ($date) {
    case "Sunday":
        echo "i like sundays";
        break;
    case "Monday":
        echo "i like mondays";
        break;
    case "Tuesday":
        echo "i like tuesdays";
        break;
    case "Wednesday":
        echo "i like wednesday";
        break;
    case "Thursday":
        echo "i like thursday";
        break;
    case "Friday":
        echo "i like friday";
        break;
    case "Saturday":
        echo "i like saturday";
        break;
    default:
        echo "i like weekends";
}



?>