<?php
$host='127.0.0.1';
$user='root';
$pwd='';
$db='playersdb';

$conn=mysqli_connect($host, $user,$pwd,$db);

if(mysqli_connect_error($conn))
{
    die("ERROR in connection:");
}

$sql_query=mysqli_query($conn,"select * from playerstb");

if($sql_query)
{
    while($row=mysqli_fetch_array($sql_query))
    {
        $flag[]=$row;

    }
    print(json_encode($flag));
}
mysqli_close($conn);


?>