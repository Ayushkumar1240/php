<!-- <?php
if (isset($_POST['srt'])=='Start')
{
    $num=rand(00000000,99999999);
echo $num."<br>";
$arr=str_split($num,4);
$temp=10;
$last=$arr[1]%10;

  while (true)
  {
        echo $arr[0]." - ".$temp." + ".$last;
        $temp+=10;$last*=2;
  }
}
?> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr><td><input type="submit" name ="start" value="start"></td>
            <td><input type="submit" name ="end" value="end"></td></tr>
        </table>

    </form>
</body>
</html>
<?php session_start();

  if (isset($_POST['start']))
  {
    $num = random_int(10000000,99999999);
    echo (int)$num/10000;
  }
  if(isset($_SESSION['end']))
{
    session_abort();
    echo "<script>location.href='viva.php'</script>";
}


?>