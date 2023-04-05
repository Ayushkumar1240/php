<?php
$num=17;
$flag=0;
for($i=2;$i<$num/2;$i++)
{
    if($num%$i==0)
    {
        echo "not prime";
        $flag=1;
        break;
    }
}
if($flag==0)
{
    echo "number is prime";
}

?>