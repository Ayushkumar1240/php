<?php
$str="the quick black fox jumps over the white dog";
$str2="over";
$pos=strpos($str,$str2);
if($pos>0)
{
    echo "$str2 is present";
}
else
{
    echo "$str2 is not present";
}
?>