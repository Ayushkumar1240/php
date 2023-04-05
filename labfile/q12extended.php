<?php
class findArmstrong
{
    public $x=0;
    public $sum;
    public $rem;
    function armstrong($number)
    {
        $this->sum=0;
        $this->x=$number;
        while($this->x!=0)
        {
            $this->rem=$this->x % 10;
            $this->sum=$this->sum+$this->rem * $this->rem * $this->rem;
            $this->x=$this->x / 10;
        }
        if($number == $this->sum)
        {
            echo "armstrong number";
        }
        else
        {
            echo "not armstrong number";
        }
    }
}

$obj=new findArmstrong();
echo ($obj->armstrong(379));
?>