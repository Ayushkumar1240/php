<?php
include_once 'configuration.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updation of data</title>
</head>
<body>
    <form action="" method="get">
    <label for="">Rollno</label>
    <input type="number" name="t1" value= "<?php echo $_GET['rn']; ?>"><br></br>
    <label for="">Name</label>
    <input type="text" name="t2" value= "<?php echo $_GET['nm']; ?>"><br></br>
    <label for="">Class</label>

    <input type="text" name="t3" value= "<?php echo $_GET['cl']; ?>"><br></br>
    <input type="submit" name="b1" Value="Update">

    </form>
</body>
</html>


<?php

if(isset($_GET['b1']))
{
    $roll=$_GET['t1'];
    $name=$_GET['t2'];
    $class=$_GET['t3'];

    if($roll!="" && $name!="" && $class!="")
    {
        $query="update student SET name='$name', class='$class' where rollno='$roll'";
        $data=mysqli_query($conn,$query);
        if($data)
        {
            echo "<p style='color:green'>Record updated sucessfully<a href='http://localhost:8080/Learnphp/module2/akashppt/reading.php'>click to see the updated table</a>";

        }
        else
        {
            echo "record not updated";
        }
    }
    else
    {
        echo "All fields required";
    }
}




?>