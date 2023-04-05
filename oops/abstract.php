<?php

abstract class parent                                     //abstract class
{
    public $name;

    abstract protected function calc($a,$b);              //abstract method

}

class child extends parent
{
    public function calc($c,$d)            // if we do not pass any argument here it will give error
    {
        //echo $c+$d;
        echo "hello";
    }
}


$test=new child();

$test->calc(45,67);


?>