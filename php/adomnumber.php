<?php
function checkAdomNumber($num)
{
    $a=square($num);
    $b=square(reverseDigit($num));

    if($a==reverseDigit($b))
    return 0;
    return -1;
}

    function reverseDigit($num)
    {
        $rev=0;
        while($num>0)
        {
            $rev=$rev*10+$num%10;
            $num=(int)$num/10;
        }
        return $rev;
    }

    function square($num)
    {
        return ($num*$num);
    }

    $num=12;
    if(checkAdomNumber($num))
    {
        echo "$num is an Adam number";
    }
    else
    {
        echo "$num is not an Adam Number";
    }

?>

