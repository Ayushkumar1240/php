<!-- <?php                   //public can only be used within the class not outside and not in derived classs 

class base
{
    private $name;

    public function __construct($n)
    {
        $this->name=$n;
    } 

    protected function show()
    {
        echo "Name: ". $this->name . "<br>";
    }
}


class derived extends base
{
    public function get()
    {
        echo "Name: ". $this->name. "<br>";
    }
}


$b2=new derived("Ayush");        

//$b1->name="Yahoo baba";

$b2->get();                                    //Undefined property: derived::$name

?> 

 -->







<!-- 
<?php

class base2
{
    private $name;

    public function __construct($n)
    {
        $this->name=$n;
    } 

    protected function show()
    {
        echo "Name: ". $this->name . "<br>";
    }
}


class derived1 extends base2
{
    public function get()
    {
        echo "Name: ". $this->name. "<br>";
    }
}


$b2=new derived("Ayush");

$b2->name="Yahoo baba";                  //will work

$b2->get();

?>  -->









<?php

class base3
{
    private $name;

    public function __construct($n)
    {
        $this->name=$n;
    } 

    public function show()
    {
        echo "Name: ". $this->name . "<br>";
    }
}


class derived2 extends base3
{
    public function get()
    {
        echo "Name: ". $this->name. "<br>";
    }
}


$b2=new base3("Ayush");

$b2->name="Yahoo baba";                //if we comment this then it will work

$b2->show();                           // Uncaught Error: Cannot access private property base3::$name

?> 
