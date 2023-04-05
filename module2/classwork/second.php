<?php
if(isset($_POST['save']))
{
    $name=$_POST['fname'];
    $em=$_POST['mail'];
    $passw=$_POST['pswd'];

    $con=mysqli_connect('localhost','root','','sectionl');

    if(!$con)
    {
        echo "You are not connected to the server";
    }
    $sql="insert into registration(uname,email,password) values('$name','$em','$passw')";

    if(mysqli_query($con,$sql))
    {
        echo "record inserted sucessfully";
       // header("refresh:5,url=post.php");
        //header("location:secm.html");
    }
}
if(isset($_POST['display']))
{
$con=mysqli_connect('localhost','root','','sectionl');
if($con)
{
    echo "you are not connected to the server";
}
$sql="SELECT id,uname,email,password FROM registration";
$result=mysqli_query($con,$sql);
}
if(mysqli_num_row($result)>0){
while($data = mysqli_fetch_assoc($result)){
    echo $data['id'];
    echo $data['uname'];
    echo $data['email'];
    echo $data['password']."<br>";

}
}
else{
    echo "no rrecord found ";
}
?>