<?php
$str="the quick black fox jumps over the white dog”;
$res=strpos($str,"over",0);
if($res>0)
{
    echo "Found";
}
else
{
    echo "Not Found";
}
?>