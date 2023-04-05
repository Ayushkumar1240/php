<?php

include_once 'configuration.php';

$query="insert into student values(14,'mehak',9)";
$data=mysqli_query($conn,$query);

if($data)
{
    echo "inserted sucessfully";
}
else
{
    echo "not inserted";
}

?>