<?php

class base
{
    public $name;

    public function __construct($n)
    {
        $this->name=$n;
    }

    public function show()
    {
        echo "Name: ".$this->name. "<br>";
    }
}


$b1=new base("ayush");

$b1->name="yahoo baba";                         //will overwrite ayush 

$b1->show();


?>