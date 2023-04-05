<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body>
    <form  method="POST">
    <label for="">Enter ID :</label>
        <input type="number" name="uid">
        <label for="">Enter Username :</label>
        <input type="text" name="uname">
        <label for="">Enter Mobile Number :</label>
        <input type="text" name="eml">
        <input type="submit" name="save" value="save">
        <input type="submit" name="display" value="display">
        <input type="submit" name="delete" value="Delete">
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>


<?php
if (isset($_POST['save'])) 
{
    $rollno=$_POST['uid'];
    $username =$_POST['uname'];
    $mail_data =$_POST['eml'];
    $connection_details=new mysqli('localhost:4306','root','','sectionh');
    //constructoor establish connection
    //4 values :  server name, username, password, database
    if (!$connection_details) 
    {
        echo 'failed';
    }
    $insert_query="INSERT INTO registration(id,uname,psw) VALUES('$rollno','$username','$mail_data')";
    if($connection_details -> query($insert_query))
    {
        echo "Success";
    }
    else
    {
        echo "failed";
    }

}
if (isset($_POST['display'])) 
{
    $sql = "SELECT id, uname, psw FROM registration";
    $conn=new mysqli('localhost:4306','root','','sectionh');
    $data = $conn->query($sql);

if ($data->num_rows > 0) 
{
  // output data of each row
  while($row = $data->fetch_assoc()) 
  {
    echo "id: " . $row["id"]. " - Name: " . $row["uname"]. " " . $row["psw"]. "<br>";
  }
} 
else 
{
  echo "0 results";
}
}

if (isset($_POST['delete'])) 
{
    $eid =$_POST['uid'];
    $conn=new mysqli('localhost:4306','root','','sectionh');
    $sql = "DELETE FROM registration WHERE id=$eid";

if ($conn->query($sql) === TRUE) 
{
  echo "Record deleted successfully";
} 
else 
{
  echo "Error deleting record: " . $conn->error;
}
}

if (isset($_POST['update'])) 
{
    $eid =$_POST['uid'];
    $username =$_POST['uname'];
    $mail_data =$_POST['eml'];
    $conn=new mysqli('localhost:4306','root','','sectionh');
    $sql = "UPDATE registration SET uname='$username', psw='$mail_data' WHERE id=$eid";

if ($conn->query($sql) === TRUE) 
{
  echo "Record updated successfully";
} 
else 
{
  echo "Error updating record: " . $conn->error;
}
}



?>