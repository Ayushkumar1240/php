<?php
include_once 'configuration.php';
$roll=$_GET['rn'];
$query="delete from student where rollno='$roll'";
$data=mysqli_query($conn,$query);
if($data)
{
    echo "<script>alert('record deleted')</script>";
    // ?>
    // <meta http-equiv="refresh" content="0; url=http://localhost:8080/Learnphp/module2/akashppt/reading.php">
    // <?php
    header("refresh:5,url=http://localhost:8080/Learnphp/module2/akashppt/reading.php");

}
else
{
    echo "delete process failed";
}

?>