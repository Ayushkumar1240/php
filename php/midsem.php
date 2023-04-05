<!-- <?php
$str1="What a beautiful day is it!!!";
   print_r (count_chars($str1,1));
?>  -->

<!-- <?php
$res=print(15>8)?printf("%d",printf("great learning")):"no";
echo $res;
?> -->

<!-- <?php
for ($i = 10; $i <= 15; $i++)
 {
	switch ($i)
     {
		case 10:
			echo "Ten";
			break;

		case 11:
			continue 2;

		case 12:
			echo "Twelve";
			break;

		case 13:
			echo "Thirteen";
			break;

		case 14:
			continue 2;

		case 15:
			echo "Fifteen";
			break;
	}
     echo "<br>";
	//echo "<br> Below switch, and i = " . $i . ' <br><br> ';
}
?> -->



<!-- <?php

// round to nearest even value
echo(round(7.5,0,PHP_ROUND_HALF_EVEN));
echo "\n";

// round to nearest odd value
echo(round(7.5,0,PHP_ROUND_HALF_ODD));
echo "\n";

// round towards zero
echo(round(7.5,0,PHP_ROUND_HALF_DOWN));
echo "\n";

// round away from zero
echo(round(7.5,0,PHP_ROUND_HALF_UP));

?> -->


<!-- <?php
echo sprintf("%'.8d\n",1234);  
?> -->

<!-- <?php  
$num = 54;  
$course = 'PHP training';  
$year = 2018;  
$format = 'There are %2$d students in %1$s batch in the %3$d year';  
echo $res = sprintf($format, $course, $num, $year);  
?>   -->

<!-- <?php
declare(strict_types=1);
function Teacher(string $name)
{
  $index = 0;
  for (; $index<= 4; $index++) 
  {
  echo strrev($name)."<br>";
  $index++;
  }
$index++;
}
Teacher("PHP class");
?> -->


<!-- <?php
declare(strict_types=1);
function greater(int $a,int $b,int $c)
{
switch($a>$b)
{
    case 0:
    {
           switch($b>$c)
           {
                      case 0:printf("%d",$c);
                    break;
                      case 1:printf("%d",$b);
                    break;
            }
            break;
    }
    case 1:
    {
             switch($a>$c)
            {
                       case 0:printf("%d",$c);
                     break;
                       case 1:printf("%d",$a);
                     break;
            }
            break;
    }
}
}
greater(4,7,3);
?> -->


<!-- <?php
echo "<html>";
echo "<head>";
echo "</head>";
echo "<body>";
 echo "<table>";
for($row=1;$row<10;$row++)
{
    echo "<tr>";
    for($col=1;$col<10;$col++)
    {
        $res=$row*$col;
        echo "<td> $row"."*"."$col = $res"."<td>";
    }
    echo "</tr>";
}
 echo "</table>";
echo "</body>";
echo "</html>";
?> -->



