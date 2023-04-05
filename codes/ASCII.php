<?php
$str='adA';
for($i=0;$i<strlen($str);$i++)
{
    $byte=substr($str,$i);
    echo $str[$i]." has a value ".ord($byte)."<br>";
}
?>