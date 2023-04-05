<!-- <?php
setcookie('userid','ralph');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAge with cookies</title>
</head>
<body>
    This page is full of cookies.
    <?php
    print($_COOKIE['userid']);
    ?>
</body>
</html>
?> -->

<?php
setcookie("hello","Ayush",time()+60*60*24*30*365,"gla.ac.in",true,true);

if(isset($_COOKIE['hello']))
{
    echo "cookie created value:" .$_COOKIE["hello"];
}
else
{
echo "not created";
}
setcookie("hello"," ",time()-10);
?>