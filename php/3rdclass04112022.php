<?php

class trial                                     //concept of reflection:-creates mirror of a class
{
    private $var1;  
    
    private function hello()
    {
         echo "hello";
    }                                             //Reflection Property  and Reflection Method
}


$obj_one=new trial();
$newobj=new ReflectionMethod('trial','hello');         //mirror object
$newobj->setAccessible(true);                          //variable or method rights are changed to public in mirror object
$newobj->invoke(new trial);
?>