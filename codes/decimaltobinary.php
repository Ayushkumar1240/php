<!-- <?php
$number=10; $mor=0;
echo "Decimal number is:".$number."<br>";
$mor=decbin($number);
echo "Binary representation of ".$number." is "."'$mor'";
?> -->



<?php
function dtb($n)
{
for ($i = 7; $i >= 0; $i--)
{
    $k = $n >> $i;
    if (($k & 1) > 0)
    {
       echo("1");
    }
    else
    {
       echo("0");
    }
}
}
dtb(10);

?>