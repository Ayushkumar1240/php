<!-- <?php
// user-defined function definition
function printMessage()
{
    echo "Hello, How are you?";
}
//user-defined function call
printMessage();
?> -->




<!-- <?php
// user-defined function definition
function sum($n1, $n2 = 0)
{
      echo "The sum of the two numbers is: ";
      echo $n1 + $n2 . "\n";
}
//user-defined function call
sum(20, 30);
sum(20);
?> -->





<!-- <?php
// user-defined function definition
function sum1($n1, $n2 = 0)
{
      return $n1 + $n2;
}
//user-defined function call
$result = sum1(100, 50);
echo "The sum of the two numbers is: ";
echo $result . "\n";
$result = sum1(200);
echo "The sum of the two numbers is: ";
echo $result . "\n";
?> -->





<!-- <?php
// user-defined function definition
function sum2( ...$n ){
$sum = 0;
foreach ($n as $no)
{
$sum = $sum + $no;
}
return $sum;
}
//user-defined function call
$result = sum2(200);
echo "The sum of the numbers is: ";
echo $result . "\n";
$result = sum2(100, 50);
echo "The sum of the numbers is: ";
echo $result . "\n";
$result = sum2(200, 50, 50);
echo "The sum of the numbers is: ";
echo $result . "\n";
?> -->





<!-- <?php
// user-defined function definition
function Call_By_Reference( &$num )
{
$num = 0;
}
//user-defined function call
$n = 10;
echo "The value of n before calling the function is: ";
echo $n . "\n";
$result = Call_By_Reference($n);
echo "The value of n after calling the function is: ";
echo $n . "\n";
?> -->




<?php
function add()
{
   $numbers=func_get_args();
   $ttl=0;
   foreach ($numbers as $num)
   {
      $ttl=$ttl+$num;
   }
   return $ttl;
}
$total=add(10,15,20);
echo "total= $total
";
echo "total=". add(1,2,3,4,5). "
";
?>