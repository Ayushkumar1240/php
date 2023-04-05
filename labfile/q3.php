<?php

function decimalToBinary($n)
{
	$binaryNum;
	$i = 0;
	while ($n > 0)
	{
		$binaryNum[$i] = $n % 2;
		$n = (int)($n / 2);
		$i++;
	}

	for ($j = $i - 1; $j >= 0; $j--)
    {
		echo $binaryNum[$j];
    }
}


function binaryToDecimal($n)
{
    $num = $n;
    $dec_value = 0;
    $base = 1;
     
    $temp = $num;
    while ($temp)
    {
        $last_digit = $temp % 10;
        $temp = $temp / 10;
         
        $dec_value += $last_digit* $base;
        $base = $base*2;
    }
    return $dec_value;
}
 

$n = 17;
echo decimalToBinary($n)."<br>";

$num = 10101001;
echo binaryToDecimal($num)."<br>";


$fnum=125.235;
echo sprintf("%0.8f",$fnum)."<br>";
echo sprintf("%0.2f",$fnum)."<br>";
echo sprintf("%0.0f",$fnum);
?>
