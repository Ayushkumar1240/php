
<?php
echo "<html>";
echo "<head>";
echo "</head>";
echo "<body>";
 echo "<table >";
for($row=1;$row<=10;$row++)
{
    echo "<tr>";
    for($col=1;$col<=10;$col++)
    {
        $res=$row*$col;
        echo "<td> $row"."*"."$col = $res"."<td>";
    }
    echo "</tr>";
}
 echo "</table>";
echo "</body>";
echo "</html>";
?>