<?php
$num1=10;
$num2=5;
$temp=1;
$max=($num1>$num2)?$num1:$num2;

while($temp)
{
    if($max%$num1==0 && $max%$num2==0)
    {
        echo $max;
        break;
    }
    ++$max;
}
?>