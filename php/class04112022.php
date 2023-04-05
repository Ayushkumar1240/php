<?php
class test
{
  public $num=45;
  private $count=45;
  protected $pro=45;
  public function hello()
  {
    echo "welcome";
    //echo $this->num;
    //$this->num=89; 
    $this->count;                 //pseudo variable(this): it belongs to the object of the current class.
                                                      
  }

  //constructor
  public function __construct()
  {
    $this->num='fail';
  }


  //destructor
  
    public function __destruct()
    {
        echo "hum honge fail";
    }
  
}

$obj_test=new test();
$obj_test_two=new test;



// echo "<pre>";                                  //difference between => and ->
// var_dump($obj_test);
// echo "</pre>";

$obj_test->hello();


//echo $obj_test->hello();

echo $obj_test_two->num;
echo $obj_test->num;

?>