<?php
$naamm=$_POST['uname'];
$pata=$_POST['add'];
$mobile=$_POST['pno'];

// echo $naamm . $pata;

$connection=mysqli_connect("localhost","root","","gla");
if(!$connection)
{
    die("Problem in connection");
}

if(isset($_POST['save']))
{
    $insert_query="INSERT INTO student(name,address,phone) values('$naamm','$pata','$mobile')";
    if(mysqli_query($connection,$insert_query))
    {
        echo "Sucess";
        header("refresh:5,url=selfmadedatabase.html");
    }
    else
    {
        echo "unable to register";
    }
}




if(isset($_POST['display']))
{
    $display_query="SELECT id, name, address, phone from student";
    $result=mysqli_query($connection,$display_query);
    if(mysqli_num_rows($result)>0)
    {
        echo "<table border='1'>
        <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>PHONE NO.</th>
        </tr>";
        

        while($data=mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td><input  type=text name=id readonly value='".$data['id']."'></td>";
            echo "<td><input  type=text name=name readonly value='".$data['name']."'></td>";
            echo "<td><input  type=text name=address readonly value='".$data['address']."'></td>";
            echo "<td><input  type=text name=phone readonly value='".$data['phone']."'></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    else
    {
        echo "no records found";
    }
}



if(isset($_POST['show']))
{
    $stu_id=$_POST['id'];

    $sql="UPDATE student SET name=$naamm , address=$pata, phone=$mobile where id=$stu_id";

    $result3=mysqli_query($connection,$sql);


}
?>
