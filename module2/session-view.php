<?php
session_start();

print_r($_SESSION);
echo"<br>";

    if(isset($_SESSION['favcolor']))
    {
        echo "Favourite color:" . $_SESSION['favcolor'];
    }
?>
