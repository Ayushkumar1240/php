<?php
echo"<html>";
$count=1;
echo"<body>";
echo"<table border=1px>";
for($row=1;$row<=8;$row++)
{
    echo"<tr>";
    for($col=1;$col<=$row;$col++)
    {
       echo"<td>$count</td>";
        $count++;
    }
    echo"</tr>";
}
echo"<table>";
echo"</body>";
echo"</html>";
    
?>