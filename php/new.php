<?php
echo "<html>";
$num=1;
echo "<body>";
echo "<table border=2px>";
for($count=1;$count<=10;$count++)
{
    echo "<tr>";
    echo "<br>";
    for($col=1; $col<=10; $col++)
    {
        echo "<td> $num </td>";
        $num++;
    }
    echo "</tr>";
}
echo "</table>";
echo "</body>";
echo "</html>";
?>