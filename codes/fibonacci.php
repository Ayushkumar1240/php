<?php 
$number1=0;
$number2=1;
echo $number1.' '.$number2.' ';
for($i=2;$i<6;$i++)
{
$number3=$number1+$number2;
echo "$number3".' ';
$number1=$number2;
$number2=$number3;
}
?>