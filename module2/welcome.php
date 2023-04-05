<?php
session_start();

if(isset($_SESSION['uname']))
 {
   echo "Welcome " .$_SESSION['uname']."<br>";
   echo "your password is ". $_SESSION['password'];
 }
 else
 {
    echo "<script> location.href='login.php'</script>";
 }

 if(isset($_POST['logout']))
 {
    session_unset();
    session_destroy();
    echo "<script> location.href='login.php'</script>";
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>