<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body>
    <form action="<?php $_SERVER?>" method="POST">
         Name: <input type="text" name="fname"><br><br>

         Age: <input type="number" name="age"><br>
         
         <input type="submit" name="save">
    </form>   
    <?php
    if(isset($_POST['save']))
    {
    echo $_POST['fname']."<br>";
    echo $_POST['age'];
    }
    ?> 
</body>
</html>