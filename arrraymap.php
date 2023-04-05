<?php
$a=[1,2,3,4,5];
$b=['lemon','orange','banana','apple','guava'];

$newarray=array_map('square',$a,$b);
function square($n,$m)
{
    return "$n for $m";
}
echo "<pre>";
print_r($newarray);
echo "</pre>";
?>