<?php

$array=array('a','b','c','d','e');
// $newarray=array_fill_keys($array,"test");

// print_r($newarray);


// $newarray=array_fill(3,4,"test");
// print_r($newarray);



// $newarray=array_fill(-4,4,"test");
// print_r($newarray);



$fruit=array("a"=>'lemon',"b"=>'orange',"c"=>'banana',"d"=>'apple');
function myFunction($v,$p)
{
    echo "$p $v<br>";

}
array_walk($fruit,"myFunction");
?>