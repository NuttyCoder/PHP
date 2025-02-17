//echo "I love Pizza!<br>";
//echo "Supreme is my favorite more flavor~!";
//  This is a comment in php code
/* This 
is a multi`line 
comment in 
php code */
//variable = a reuseable container that holds data
//string, integer, float, booleans
    

//string
/*  $name = "Heather Scheer";
    $food = "Pizza";
    $email = "nuttycoders@gmail.com";
//integer
    $age = 49;
    $users = 2;
    $quanity = 3;

//float
    $gpa = 4.0;
    $price = 4.99;
    $taxrate = 5.1;

//boolean
$employed =true;
$online = false;
$for_sale = true;

$total = $quanity * $price;

    echo "Hello {$name}<br>";
    echo "I love {$food}<br>";
    echo "My email is {$email}<br>";
    echo "I am {$age} years old<br>";
    echo "I have {$users} users online<br>";
    echo "I have {$quanity} pizzas<br>";
    echo "My GPA is {$gpa}<br>";
    echo "The pizza price is \${$price}<br>";
    echo "The tax rate is {$taxrate}%<br>";
    echo "Am I employed? {$employed}<br>";

    echo "You have ordered {$quanity} x {$food}s <br>";
    echo "Your total is \${$total}<br>";


// Arithmetic operators
// + - * / ** %
// % is the modulus operator which is the remainder of something if you have other than 0 it's odd


/*  $x = 10;
    $y = 3;
    $z = null;

    //$z = $x + $y;
    //$z = $x - $y;
    //$z = $x * $y
    //$z = $x / $y;
    //$z = $x ** $y;
/*    $z = $x % $y;
    echo $z;


// Increments and decrements operators
// ++ -- ++(add 1) --(subtract 1) += (add/sub the value to like if you wanted other than 1)
/*  $counter = 0;
    $counter++;
    echo $counter . "<br>";


//Operator precedence
// ()
// **
// * / %
// + -

$total = 1 + 2 - 3 * 4 / 5 ** 6;
echo $total;

// Super Global Variables
// $_GET, %_POST = special variables used to collect data from an Html form 
// data is sent to the file in the action attribute of 
// 

<!--DOCTYPE html> 
<html>
<head>
        <input type="email" name="email" id="email">
        <input type="submit" value="Submit">
        </form>   
    </body>
</html>

//   $name = $_GET['name'];
//   $email = $_GET['email'];
//   echo "Hello {$name}<br>";
//   echo "Your email is {$email}<br>";
//   -->


/* $_GET  = Data is appended to the URL
//         NOT SECURE
//         Data is visible to everyone in the URL
//         Limited amount of data can be sent "char Limit
//         Useful for sending non-sensitive data
//         Useful for sending data that does not change the state of the server
//         Useful for sending data that does not need to be stored
//         Useful for sending data that does not need to be validated
//         Useful for sending data that does not need to be encrypted
//         Bookmark is possible w/values
//         GET requests can be cached
//         GET requests remain in the browser history
//         GET requests can be bookmarked
//         GET requests should never be used when dealing with sensitive data
//         GET requests have length restrictions
//         GET requests are only used to request data (not modify)
//         better for a search page
//         GET is less secure compared to POST because data sent is part of the URL

//$_POST = Data is packaged inside the body of the HTTP request
//         More Secure
//         No data limit
//         Cannot bookmark
//         Cannot be cached
//         Does not remain in the browser history
//         GET requests are not cached
/*         Better for submitting credentials, <br>_________________________________________________________________________________________

<br>
<br>



<!DOCTYPE html>     
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Form</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <label> username:</label><br>
            <input type="text" name="username" ><br>
            <label> password:</label><br>
            <input type="password" name="password"><br>
            <input type="submit" value="Log In">
        </form>
    </body>
<?php
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";
    ?>  
