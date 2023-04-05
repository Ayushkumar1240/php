<!-- <?php
$x=20;
function test()
{
    //$x=10;
    global $x;
    echo "Variabe x inside function: ".$x."<br>";

}
test();
echo "variable x outside function:".$x;
?> -->



<?php
$x=10;
$y=20;
function test1()
{
    global $x,$y;
    //$x=30;
    //$y=40;
    $x=$x+$y;
}
test1();
echo $x;
?>