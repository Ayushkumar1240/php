<?php

function getMaximum($array)
{
    $n = count($array);
    $max = $array[0];
    for ($i = 1; $i < $n; $i++)
    {
	    if ($max < $array[$i])
        {
		$max = $array[$i];
        }
    }
	return $max;	
}


function getMinimum($array)
{
    $n = count($array);
    $min = $array[0];
    for ($i = 1; $i < $n; $i++)
    {
	    if ($min > $array[$i])
        {
		$min = $array[$i];
        }
    }
	return $min;	
}


$array = array(360,310,310,330,313,375,456,111,256);
echo "The maximum among the given array is: ". (getMaximum($array))."<br>";

echo "The minimum among the given array is: ". (getMinimum($array));
?>
