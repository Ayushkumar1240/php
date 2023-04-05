<?php


session_start();

if(!isset($_SESSION['uname']))
{
  if(isset($_POST['login']))
  {
    $name=$_POST['username'];
    $pass=$_POST['password'];
    $_SESSION['uname']=$name;
    $_SESSION['password']=$pass;

    echo "<script>location.href='welcome.php'</script>";
  }
}
else
{
    echo "<script>location.href='welcome.php'</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <form action="" method="post">
        Username: <input type="text" value="" name="username"><br><br>
        password: <input type="password" value="" name="password"><br><br>
        <input type="submit" value="login" name="login">
    </form>
</body>
</html>