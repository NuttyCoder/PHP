<?php
// logical operators = combine conditional statements
// if (condition1 && condition2) = true if both condition1 and condition2 are true

// && = True if both conditions are true (AND)
// || = True if at least one condition is true (OR)
// ! = True if condition is false (NOT)

$temp = 100;

if ($temp > 20 && $temp < 30) {
  echo "The temperature is perfect";
} else {
  echo "The temperature is not perfect";
}

?>
