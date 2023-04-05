<?php
$num=5;
$carry=1;
for($i=$num;$i>=1;$i--)
{
    $carry=$carry*$i;
}
echo "the factorial of ".$num." is ".$carry;
?>