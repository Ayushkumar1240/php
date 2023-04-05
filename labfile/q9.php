<?php
echo"<html>";
$num=1;
echo"<body>";
echo"<table>";

for($row=1;$row<=10;$row++)
{
    echo "<tr>";
    echo"<br>";
    for($col=1;$col<=10;$col++)
    {
    $res=$row*$col;
    echo"<td style='border:1px solid black'> $res</td>";
    $num++;
    }
echo"</tr>";
}

echo"</table>";
echo"</body>";
echo"</html>";
?>
