<?php
$a="i love php, i love php too!";
echo strstr($a,"php");
echo "<br>";

echo strstr($a,"php",true);
echo "<br>";

echo strrchr($a,"php");
echo "<br>";




$str="hello world. The world is nice";

echo strstr($str,"world");
echo "<br>";
echo strstr($str,"world",true);
echo "<br>";
echo strchr($str,"world");
echo "<br>";
echo strrchr($str,"world");
echo "<br>";
echo strpbrk($str,"e");
echo "<br>";
echo strpbrk($str,"wo");

?>