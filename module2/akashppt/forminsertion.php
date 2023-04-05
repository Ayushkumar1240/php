<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Enter your roll number:</label>
        <input type="number" name="t1"><br><br>

        <label>Enter your name:</label>
        <input type="text" name="t2"><br><br>

        <label>Enter your class</label>
        <input type="number" name="t3"><br><br>

        <input type="submit" name="b1" value="insert record">
    </form>
</body>
</html>


<?php

include_once 'configuration.php';
if(isset($_POST['b1']))
{
    $roll=$_POST['t1'];
    $name=$_POST['t2'];
    $class=$_POST['t3'];

    if($roll!="" && $name!="" && $class!="")
    {
        $query="insert into student values('$roll','$name','$class')";
        $data=mysqli_query($conn,$query);
        if($data)
        {
            echo"<p style='color:green'>Data inserted sucessfully <a href='http://localhost:8080/Learnphp/module2/akashppt/reading.php'>click";
        }
        else
        {
            echo "data not inserted";
        }
    }
    else
    {
        echo "<p style='color:red'> All fields are reqiured";
    }
}


?>