<?php

class ayush
{

    private $name="harry potter";
    private function prifun()
    {
        echo "this is under private function";
    }


}
$ref=new ReflectionMethod('ayush','prifun');                               //private method call
$ref->setAccessible('true');

echo $ref->invoke(new ayush);



$property=new ReflectionProperty('ayush','name');                        //private property call
$property->setAccessible('true');

echo $property->getvalue(new ayush);

// $obj=new ayush();

// $obj->prifun();


?>