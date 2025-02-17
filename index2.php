 <!DOCTYPE html>        
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <label> quanity:</label><br>
    <input type="text" name="quantity">
    <input type="submit" value="total">
</form>
</body>
</html>
<?php
    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = $price * $quantity;
    echo "You have ordered {$quantity} x  {$item}/s <br>";
    echo "Your total is: \${$total}";
?>
