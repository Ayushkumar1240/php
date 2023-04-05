<?php

class employee
{
    public $name;
    public $age;
    public $salary;

    function __construct($n,$a,$s)
    {
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;
    }

    function show()
    {
        echo "<h3> Employee profile </h3>";
        echo "Employee name:".$this->name."<br>";
        echo "Employee age:".$this->age."<br>";
        echo "employee salary:".$this->salary."<br>";

    }

}

class manager extends employee
{
    public $ta=1000;
    public $phone=300;
    public $totalsalary;
    function show()
    {
        $this->totalsalary=$this->salary + $this->ta +$this->phone;;

        echo "<h3>Manager profile</h3>";
        echo "Manager name:".$this->name ."<br>";
        echo "manager age:".$this->age."<br>";
        echo "Manager salary:".$this->totalsalary,"<br>";
    }
}





$e1=new employee("ayush",20,100000);
$e2=new manager("kallu",30,2000000);
$e1->show();
$e2->show();

?>