<?php
echo "<table border=5px cellspacing=0px height=500px width=270px>";
for($i=0;$i<8;$i++)
{
    echo "<tr>";
    for($j=0;$j<8;$j++)
    {
        if(($i+$j)%2==0)
        {
            echo"<td bgcolor=black height=30px width=30px>";
        }
        else
        {
            echo"<td bgcolor=white height=30px width=30px>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>