
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q16.php" method="post">
        <label>Enter your name</label>
        <input type="text" name="naam"><br>

        <label> enter your message</label>
        <input type="textarea" name="add"><br>

        <input type="submit" name="sub"> 
    </form>
</body>
</html>

<?php

$file=fopen("lab.txt","a+");


if(isset($_POST['sub']))
{
fwrite($file,$_POST['naam']);
fwrite($file,$_POST['add']);
}

fclose($file);


?>