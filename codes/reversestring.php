<?php
$str="abcd ef ghi";
$n=strlen($str);
for($i=0;$i<$n/2;$i++)
{
  $temp=$str[$i];
  $str[$i]=$str[$n-$i-1];
  $str[$n-$i-1]=$temp;
}
echo $str;
?>