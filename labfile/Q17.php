<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Q17extended.php" method="post">
        
        <label> First name:</label><input type="text" name="fname" required  placeholder="Enter your name" autocomplete="on"><br>

        <label>Enter your email</label><input type="email" name="mail"><br>

        <label> Tpye your password:</label><input type="password" name="psw" maxlength="8" size="20px"><br><br>
       
        <input type="submit" name="b1" value="LOGIN">
    </form>
</body>
</html>

<?php

if(isset($_POST['b1']))
{
session_start();
$_SESSION['username']=$_POST['fname'];

}



?>