<?php
$str="hello world. The world is nice";
echo str_replace('world','earth',$str);
echo "<br>";


echo substr_replace($str,"earth",6);
echo "<br>";

echo substr_replace($str,"earth",6,10);
echo "<br>";


echo strtr($str,"eo","ia");
?>