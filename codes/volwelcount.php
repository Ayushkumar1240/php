<?php
$str="hello there this is php00112";
$vowels=array('a','e','i','o','u');
$number=array(1,2,3,4,5,6,7,8,9,0,);
$len=strlen($str);
$num1=0;
$num2=0;
$num3=0;
for($i=0;$i<$len;$i++)
{
    if(in_array($str[$i],$vowels))
    {
       $num1++;
    }
}
function countDigits($str)
{
    $pattern="/[0-9]/";
    return preg_match_all($pattern,$str);
}
substr_count($str,' ');

echo "number of vowels:".$num1."<br>";
echo "number of digits: ".countDigits($str)."<br>";
echo  "number of spaces:". substr_count($str," ");
?>