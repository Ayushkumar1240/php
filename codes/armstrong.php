<?php
$num=153;
$temp;
$digit=0;
$last=0;
$sum=0;
$temp=$num;
while($temp>0)
{
$temp=$temp/10;
$digit++;
}
$temp=$num;
while($temp>0)
{
    $last=$temp%10;
    $sum=$sum+pow($last,$digit);
    $temp=$temp/10;
}
if($num==$sum)
{
    echo "True";
}
else
{
    echo "False";
}
?>