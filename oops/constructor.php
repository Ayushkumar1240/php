//<?php                                                            

//class person
//{
//    public $name="ayush";
//    public $age=20;

//    function show()
//    {
//        echo $this->name."-".$this->age;
//    }
//}

//$p1=new person();

//$p1->name="yahoo baba";
//$p1->age=40;

//$p1->show();

//?> 


<?php

class person
{

    public $name ="ayush";
    public $age=20;
    function __construct($n,$a)           //function __construct($n="ayush",$a=20)   this will generate no error even we do not pass any value at the time of object decelaration
    {
        $this->name=$n;
        $this->age=$a;
    }

    function show()
    {
        echo $this->name."-".$this->age;
    }
}

$p1=new person("yahoo baba",40);
$p1->show();

$p2=new person();             //this will generate error as no argument is passed though we have default values

$p2->show();



?>