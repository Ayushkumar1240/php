<?php
// $color=['red','green','blue','yellow'];

// $newarray=array_keys($color);
// print_r($newarray);


$color=['first'=>'red','second'=>'green','third'=>'blue','fourth'=>'yellow'];
// $newarray=array_keys($color);
// print_r($newarray);
// $newarray1=array_key_first($color);
// print_r($newarray1);



$a1=array('a'=>'red','b'=>'green','c'=>'blue','d'=>'yellow');
$a2=array('a'=>'red','f'=>'green','d'=>'purple');

$newarray=array_intersect_ukey($a1,$a2,"compare");
function compare($a,$b)
{
    if($a===$b)
    {
        return 0;
    }
    return ($a>$b)?1:-1;
}

print_r($newarray);
?>