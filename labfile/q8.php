<?php

$a=$_GET['num'];

     
switch($a)
{      
case 1:      
    function Factorial($number)
    {
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++)
        {
        $factorial = $factorial * $i;
        }
        return $factorial;
    }
    $number = $_GET['valu'];
    $fact = Factorial($number);
    echo "Factorial = $fact";      
break; 

case 2:      
    function primeCheck($number)
    {
        if ($number == 1)
        return 0;
        for ($i = 2; $i <= $number/2; $i++)
        {
            if ($number % $i == 0)
                return 0;
        }
        return 1;
    }
    
    
    $number = $_GET['valu'];
    $flag = primeCheck($number);
    if ($flag == 1)
        echo "Prime";
    else
        echo "Not Prime";      
break;      
case 3:      
    function calcarea($side)
    {
        $area=$side*$side;
        return $area;
    }   
    
    $a=$_GET['valu'];

    echo calcarea($a);
break;      
default:      
echo("wrong choice");      
}     
?> 
