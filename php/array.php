<?php
$x=20;
$y=10;
function test()
{
    
    global $x,$y;
    $x=$x+$y;
    
    echo "the value inside test is $x";
}
test();
echo "variable x outside function :$x";
?>