<?=
	$a=readline('enter first number');
    echo $a;
    $b=readline('enter first number');
    echo $b;
    $c=readline('enter first number');
    echo $c;
    function greater(int $a, int $b, int $c)
    {
    switch($a>$b)
    {
        case 0:
            {
                switch($b>$c)
                {
                  case 0:echo("$c is greater");
                  break;

                  case 1:echo("$b is greater");
                  break;
                }
                break;
            }
        case 1: 
            {
                switch($a>$c)
                {
                  case 0:echo("$c is greater");
                  break;

                  case 1:echo("$a is greater");
                  break;
                }
                break;
            }
    }
}
greater(6,9,3);

?>
