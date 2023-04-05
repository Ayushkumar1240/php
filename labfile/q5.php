<?php

for($i=1;$i<=100;$i++)
{
    if($i%3==0 && $i%5==0)
    {
        echo "FULLSTACK"."  ";
    }
    else if($i%3==0)
    {
        echo "FRONTEND"."  ";
    }
    else if($i%5==0)
    {
        echo "BACKEND"."  ";
    }
    else
    {
        echo $i."  ";
    }
}


?>