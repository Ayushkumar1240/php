<?php
$food=array('fruits'=>array('orange','banana','apple'),'veggie'=>array('carrot','collard','pea'));
echo count($food)."<br>";
echo count($food,1)."<br>";
echo count($food['fruits'])."<br>";

print_r($food);
echo "<br>";
var_dump($food);
echo "<br>";
$inge=["tiyu","vvjhguk",78979,"pio"];

print_r(array_count_values($inge));
?>