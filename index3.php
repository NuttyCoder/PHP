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
        <label>x: </label>
        <input type="text" name="x"><br>
        <label>y: </label>
        <input type="text" name="y"><br> 
        <label>z: </label>
        <input type="text" name="z"><br> 
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
    $x =  $_POST['x'];
    $y =  $_POST['y'];
    $z =  $_POST['z'];
    $total = null;

    // absoulute value function = $total =abs($x);
    // rounding function $total =round($x);
    // rounding down function $total =floor($x);
    // rounding up function $total =ceil($x);
    // square root function $total =sqrt($x);
    // random number function $total =rand(1,100);
    //$total =rand(90,568);
    // pi function $total =pi();
    // max function $total =max(1,2,3,4,5,6,7,8,9,10);
    // $total =max($x,$y,$z);
    // min function $total =min(1,2,3,4,5,6,7,8,9,10);
    // $total =min($x,$y,$z);
    echo $total;
?>
