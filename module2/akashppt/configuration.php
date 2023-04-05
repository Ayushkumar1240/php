<?php

error_reporting(0);

$conn=mysqli_connect("localhost:4306","root","","trial");

if($conn)
{
    echo "connection stablished"."<br>";
}
else
{
    echo "connection not established"."<br>";
}
?>