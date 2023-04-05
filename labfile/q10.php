<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q10.php" method="post">
        <input type="number" name="num"><br>
        <input type="button" name="btn" value="click here">
    </form>
</body>
</html>

<?php

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

function square($num)
{
	return ($num * $num);
}

function checkAdamNumber($num)
{
	$a = square($num);
	$b = square(reverseDigits($num));
	
	if ($a == reverseDigits($b))
	return 0;
	return -1;
}
$num = 12;
if (checkAdamNumber($num))
echo "Adam Number";
else
echo "Not a Adam Number";

?>
