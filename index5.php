<?php
// if statements = if some condition is true, do something
//                 if some condition is false, don't do it

$age = 17;

if ($age >= 21) {
  echo "You can buy beer!";
} 
elseif ($age >= 18) {
  echo "You can buy cigarettes!";
}
else if ($age >= 16) {
  echo "You can drive!";
}
else {
  echo "You can't buy beer!";
}

$hours = 40;
$rate = 15;
$weeklyPay = null;

if($hours <= 40) {
  $weeklyPay = $hours * $rate;
}
else {
  $weeklyPay = (40 * $rate) + (($hours - 40) * ($rate * 1.5));
}   
echo "<br>Weekly pay is: $weeklyPay";

?>
