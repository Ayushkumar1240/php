<?php
$a="hello world";
$new=strlen($a);
echo $new;
echo "<br>";



$new=str_word_count($a);
echo $new;
echo "<br>";



$new=substr_count($a,'o',5,2);
echo $new;
echo "<br>";



$str="yahoo baba";
echo strlen($str);
echo "<br>";
echo str_word_count($str,0);
echo "<br>";
$array=str_word_count($str,1);
print_r($array);
echo "<br>";
$array=str_word_count($str,2);
print_r($array);

?>