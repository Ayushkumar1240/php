
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <form action="" method="post">
            <label>Enter the string to be converted into MD5:</label></br>
            <input type="text" name="md5"><br>
            <input type="submit" name="submit" value="MD5"><br>
            The MD5 is:<input type="text" value="<?php echo $newstr1; ?>"><br>

            <label>Enter the number you want to convert into number format</label><br>
            <input type="number" name="numformat" ><br>
            <input type="submit" name="submit1" value="number format"><br>
            <!-- The Number Format is:<input type="number" value="<?php echo $format; ?>"><br> -->

        </form>
    </table>        
</body>
</html>
<?php
  $str="";
   if(isset($_POST['submit']))
   {
    $newstr=$_POST['md5'];
    $newstr1=md5($newstr);
   }

   $num="";
   if(isset($_POST['submit1']))
   {
    $number1=$_POST['numformat'];
    $format=number_format($number1,3);
   }



 ?>
  The Number Format is:<input type="number" value="<?php echo $format; ?>"><br>

