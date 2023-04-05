<?php
$name=$_POST['uname'];
$passwr=$_POST['pwd'];


//echo $name.$passwr;


$connection=mysqli_connect("localhost","root","","extraclass");

if(!$connection)
{
    die("Problem In Connection");
}


if(isset($_POST['save']))
{
    $insert_query="INSERT INTO userdata(uname,passw) VALUES ('$name','$passwr')";
    if(mysqli_query($connection,$insert_query))
    {
        echo "sucessfull enjoy!!!!";
        header("refresh:5,url=extra_class.html");
    }
    else
    {
        echo "unalble to register";
    }
}


if(isset($_POST['display']))
{
    $display_query="SELECT id,uname,passw FROM userdata";
    $result=mysqli_query($connection,$display_query);
    echo "<pre>";
    var_dump($result);
    echo "</pre>";
    if(mysqli_num_rows($result)>0)
    {
        echo "<table border='1'>
        <tr>
        <th>ID</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        </tr>";

        while($data=mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td><input  type=text name=id readonly value='".$data['id']."'></td>";
            echo "<td><input  type=text name=uname readonly value='".$data['uname']."'></td>";
            echo "<td><input  type=text name=password readonly value='".$data['passw']."'></td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<pre>";
        var_dump($result);
    echo "</pre>";
    }
    else
    {
        echo "no records found";
    }
}


if(isset($_POST['update']))
{
    $name=$_POST['uname'];
    $passwr=$_POST['pwd'];
    $sql="UPDATE userdata SET uname='$name', passw='$passwr' where uname='$name'";
    if(mysqli_query($connection,$sql))
    {
        echo "updated";
    }
    else
    {
        echo "not updated";
    }
}

if(isset($_POST['delete']))
{
    $name=$_POST['uname'];
    $pass=$_POST['pwd'];

    $sql="delete from userdata where uname='$name'";
    $data=mysqli_query($connection,$sql);
    if($data)
    {
        echo "deleted";
    }
    else
    {
        echo "not deleted";
    }
}





?>