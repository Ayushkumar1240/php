
<?php
// PHP program to check Adam Number

// To reverse Digits of numbers
function reverseDigits($num)
{
	$rev = 0;
	while ($num > 0)
	{
		$rev = $rev * 10 + $num % 10;
		$num = (int) $num / 10;
	}
	return $rev;
}

// To square number
function square($num)
{
	return ($num * $num);
}

// To check Adam Number
function checkAdamNumber($num)
{
	// Square first number and square
	// reverse digits of second number
	$a = square($num);
	$b = square(reverseDigits($num));
	
	// If reverse of b equals a then
	// given number is Adam number
	if ($a == reverseDigits($b))
	return 0;
	return -1;
}

// Driver Code
$num = 16;

if (checkAdamNumber($num))
echo "Adam Number";
else
echo "Not a Adam Number";

// This code is contributed by aj_36
?>
