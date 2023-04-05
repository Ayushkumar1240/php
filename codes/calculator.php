<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" >
        Enter the first number:<input type="number" name="n1"><br>
        Enter the second number:<input type="number" name="n2"><br>

        <input type="submit" value="addition" name="b1" ><br>
        <input type="submit" value="sub" name="b2" ><br>
        <input type="submit" value="mul" name="b3" ><br>
        <input type="submit" value="div" name="b4" ><br>
    </form>
</body>
</html>


<?php

if(isset($_POST['b1']))
{
    $num1=$_POST['n1'];
    $num2=$_POST['n2'];

    $num3=$num1+$num2;

    echo $num3;
}

if(isset($_POST['b2']))
{
    $num1=$_POST['n1'];
    $num2=$_POST['n2'];

    $num3=$num1-$num2;

    echo $num3;
}

if(isset($_POST['b3']))
{
    $num1=$_POST['n1'];
    $num2=$_POST['n2'];

    $num3=$num1*$num2;

    echo $num3;
}

if(isset($_POST['b4']))
{
    $num1=$_POST['n1'];
    $num2=$_POST['n2'];

    $num3=$num1/$num2;

    echo $num3;
}


?>