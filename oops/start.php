<?php

class Calculation
{
    public $a,$b,$c;

    function sum()
    {
        $this->c=$this->a + $this->b;
        return $this->c;

    }
    function sub()
    {
        $this->c=$this->a - $this->b;
        return $this->c;
    }
}

    $c1=new Calculation();


    $c1->a=20;
    $c1->b=10;


    $c2=new Calculation();
    

    $c2->a=50;
    $c2->b=15;

    echo "added value is: ". $c1->sum(). "\n";

    echo "Subtracted value is: ". $c2->sub();



?>