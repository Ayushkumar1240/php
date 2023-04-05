<?php
$cookie_name="user";
$cookie_value="yahoo baba";

setcookie($cookie_name,$cookie_value,time()+(86400*30),"/"); //mktime(12,0,0,10,29,2022)->will expire on 29th october 2022 at 12:00:00

        if(!isset($_COOKIE[$cookie_name]))
        {
            echo "Cookie is not set";
        }
        else
        {
            echo $_COOKIE[$cookie_name];
        }
?>
   