<?php
 echo"<html>";
echo"<body>";
echo "<table border=5px bordercolor=red cellspacing=5px height=500px width=500px>";
for($i=0;$i<8;$i++)
{
    echo"<tr>";
    for($j=0;$j<8;$j++)
    {
        if(($i+$j)%2==0)
        {
            echo"<td bgcolor=black height=10px width=10px>";
        }
        else
        {
            echo"<td bgcolor=white height=10px width=10px>";
        }
    }echo"</tr>";
}
echo"</table>";
 echo"</body>";
  echo"</html>";
?>