<!-- <?php
$a=array("Bill"=>10,"Joe"=>blue,80=>30);
var_dump($a);
echo "<br>";
print_r($a);
echo "<br>";


$b=array(20,"nblu",67);
var_dump($b);
echo "<br>";
print_r($b);
echo"<br>.<br>";

$age=[100=>"24","bill"=>45.88,13=>30];
$age["elon"]=50;
print_r($age);
echo "<br>";
var_dump($age);
echo $age[100]."<br>";
echo $age["bill"]."<br>";
echo $age[13]."<br>";

?> -->


<!-- 
<?php
$array=array(10,20,30);
foreach($array as $value)
{
    echo $value;
}


$age=["bill"=>10,"steve"=>40,"elon"=>90];
foreach($age as $key=>$value)
{
    echo "$key=$value<br>";
}



$emp=[[1,"ks","mana",60],[1,"ks","mana",60],[1,"ks","mana",60],[1,"ks","mana",60],[1,"ks","mana",60]];
for($i=0;$i<5;$i++)
{
    for($j=0;$j<4;$j++)
    {
        echo $emp[$i][$j]." ";
    }
    echo "<br>";
}

foreach($emp as $v1)
{
    foreach($v1 as $v2)
    {
        echo $v2." ";
    }
    echo "<br>";
}
?> -->




<!-- <?php
$x="abc";
$$x=200;
echo $x."<br>";
echo $$x."<br>";
echo $abc;
?> -->


<?php
// $poo='hey';
// echo <<< "mystring"
// hello $poo 'world'.
// goodbye!
// mystring;

// echo<<<'hel'
// my "name" is $poo khan
// hel;

// $res="hello";
// echo 'the \'value\' of : $res';


$res="2";
$var=print($res==3)? :"no";
echo $var;