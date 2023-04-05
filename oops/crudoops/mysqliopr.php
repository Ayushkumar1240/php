<?php

$conn=new mysqli("localhost","root","","trial2");



if($conn)
{
    echo "connection stablished"."<br>";
}
else
{
    echo "connection not stablished";
}


$result=$conn->query("select * from student");
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        echo "Rollno: {$row['rollno']}, Name: {$row['name']} , class: {$row['class']} <br>";
    }

}
else
{
    echo "nodata";
}

?>