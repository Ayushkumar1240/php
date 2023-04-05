<?php
$num=44;
$flag=0;
for($i=2;$i<=$num/2;$i++)
{
    if($num%$i==0)
    {
        echo $num." is not a prime number"."<br>";
        $flag=1;
        break;
    }

}
if($flag==0)
{
    echo $num." is a prime number"."<br>";
}

for($j=2;$j<$num;$j++)
{
    if($num%$j==0)
    {
        $num++;
        $j=2;
    }
    else
    {
        continue;
    }
}
echo "next prime number is ".$num;
?>