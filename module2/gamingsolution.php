<?php
session_start();
if(!isset($_SESSION['count']))
$_SESSION['count']=rand(1,100);
?>
<form action="gamingsolution.php" method="post">
   <div style="background-image: url('https://static.vecteezy.com/system/resources/thumbnails/008/079/335/small/empty-showcase-abstract-pastel-color-background-3d-illustration-free-vector.jpg');height: 100%;">
   <h1>Guess Number Game</h1>
<input style="height: 100px;width: 200px;background-color: #9CF760;margin-left: 500px;" type="submit" value="Start" name="b1">
</form>

<?php
if(isset($_POST['b1']) || isset($_POST['b2']))
{

   echo "<form action='gamingsolution.php' method='post'>";
   echo "<input style='height: 50px;width: 200px  margin-left: 500px margin-top: 250px' type='text' name='t1'>";
   echo "<input style='height: 50px;width: 100px  margin-left: 500px margin-top: 250px' type='submit' value='Check' name='b2'>";
   echo "</form>";
}
?>
<?php
if(isset($_POST['b2']))
{
       
   $a=$_SESSION['count'];
   $ar = $_POST['t1'];
   for($i=1;$i<=1;$i++)
   {
       if ($ar < $a) 
       {
           echo "<h1 style='font-size:17px'>Your Number Is Small</h1>";
       }
       elseif ($ar > $a) 
       {
           echo "<h1 style='font-size:17px'>Your Number Is Higher</h1>";
       }
       else
       {
           echo "<h1 style='font-size:17px'>Your Data Is Correct</h1>";
           session_destroy();
           break;
       } 
   }
   
}
?>