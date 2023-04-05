<?php
echo"<table>";
for($row=0;$row<10;$row++)
{
echo"<tr>";
for($i=0;$i<10;$i++)
{
    $res=$row.$i;
    echo"<td>echo $res</td>"."br";
}
}
echo"</tr>";
echo"<table>";
?>