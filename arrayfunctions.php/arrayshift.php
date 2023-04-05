<?php
$fruit=['orange','banana','guava'];

array_shift($fruit);                  //removes the element present at 0th index

print_r($fruit);
echo "<br>";



array_unshift($fruit,"apple","lemon");    //inserts from the 0th index

print_r($fruit);
?>