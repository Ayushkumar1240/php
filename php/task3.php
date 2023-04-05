<?php
echo"<html>";
echo"<body>";
echo"<table border=1px >";
for($row=0;$row<=9;$row++)
{
    echo"<tr>";
    for($col=0;$col<=9;$col++)
    {
        $count=$row.$col;
       echo"<td>$count</td>";
    }
    echo"</tr>";
}
echo"<table>";
echo"</body>";
echo"</html>";
    
?>