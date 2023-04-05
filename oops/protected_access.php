<!-- <?php             //protected can be used only within class and only in derived class not outside 

class base
{
    public $name;

    public function __construct($n)
    {
        $this->name=$n;
    } 

    public function show()
    {
        echo "Name: ".$this->name;
    }
}



$b1=new base("Ayush");

$b1->name="Yahoo baba";

$b1->show();

?> -->





<!-- 
<?php

class base1
{
    protected $name;

    public function __construct($n)
    {
        $this->name=$n;
    } 

    public function show()
    {
        echo "Name: ".$this->name;
    }
}



$b1=new base1("Ayush");

$b1->name="Yahoo baba";                //Cannot access protected property base1::$name
                                       //if we comment this line it will not not generate any error as constructor will come into action

$b1->show();

?> -->





<?php

class base2
{
    protected $name;

    public function __construct($n)
    {
        $this->name=$n;
    } 

    protected function show()
    {
        echo "Name: ". $this->name . "<br>";
    }
}


class derived extends base2
{
    public function get()
    {
        echo "Name: ". $this->name. "<br>";
    }
}


$b2=new derived("Ayush");

//$b1->name="Yahoo baba";

$b2->get();

?> 
