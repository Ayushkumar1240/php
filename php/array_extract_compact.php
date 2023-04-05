<?php
//part1
$array1=array('a'=>"red",'b'=>"green",'c'=>"yellow");
extract($array1);

echo"The value of a:$a<br>";
echo"The value of b:$b<br>";
echo"The value of c:$c<br>";



//part2
$a='orange';
extract($array1,EXTR_PREFIX_SAME,"test");

echo"The value of a:$a<br>";
echo"The value of a:$test_a<br>";
echo"The value of b:$b<br>";
echo"The value of c:$c<br>";



//part3
extract($array1,EXTR_PREFIX_ALL,"test");

echo"The value of a:$a<br>";
echo"The value of a:$test_a<br>";
echo"The value of b:$test_b<br>";
echo"The value of c:$test_c<br>";



//part4
$first="ayush";
$second="kumar";
$third="sah";
$city="jsr";
$country="india";

$extra=["city","country"];
$newarray=compact("first","second","third",$extra);

echo"<pre>";
print_r($newarray);
echo"</pre>";

?>