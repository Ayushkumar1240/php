<?php
$year=1979;
if($year%400==0)
{
    echo "true";
}
else if($year%100==0)
{
    echo "false";
}
else if($year%4==0)
{
    echo "true";

}
else
{
    echo "false";
}
?>