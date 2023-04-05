<?php
session_start();
if(isset($_SESSION['user']))
{
    echo "Welcome","h3 style='color:red' align=center>".$_SESSION['user']."</h3>";
    echo "<h4> You are on product page </h4>";
    echo "<a href='home.php'>Click here for Home</a>";
    echo "<br><a href='logout.php'><input type=submit name=logout value=logout></a>";
}
else
{
    echo "<script>location.href='login.html'</script>";
}




?>