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
    echo"<td style='border:1px solid black'> $num</td>";
    $num++;
    }
echo"</tr>";
}

echo"</table>";
echo"</body>";
echo"</html>";
?>
