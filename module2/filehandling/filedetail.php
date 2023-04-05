<?php

$file="readme.txt";


echo filesize($file)."<br>";


echo filetype($file)."<br>";
echo filetype("newfolder")."<br>";



echo realpath($file)."<br>";

$path=realpath($file);




echo "<pre>";
print_r (pathinfo($file));
echo "</pre>";


echo "<pre>";
print_r (pathinfo($path));
echo "</pre>";


echo "<pre>";
print_r (pathinfo($path,PATHINFO_DIRNAME));
echo "</pre>";


echo "<pre>";
print_r (pathinfo($path,PATHINFO_BASENAME));
echo "</pre>";


echo "<pre>";
print_r (pathinfo($path,PATHINFO_EXTENSION));
echo "</pre>";


echo "<pre>";
print_r (pathinfo($path,PATHINFO_FILENAME));
echo "</pre>";


echo basename($path)."<br>";


echo basename($path,".txt")."<br>";



echo dirname($path)."<br>";

echo dirname($path,2)."<br>";

echo dirname($path,3)."<br>";





?>