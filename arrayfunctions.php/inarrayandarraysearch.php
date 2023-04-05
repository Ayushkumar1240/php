<?php
$a=["sanjay","aman","rahman","karan"];
echo in_array('aman',$a)."<br>";                            //returns 0 or 1
echo array_search('rahman',$a)."<br>";                      //returns index
echo array_search('lime',$a)."<br>";                        // will print space if not found

$food=array('orange','banana','apple',77,90.00,'67');
echo in_array(77,$food);
echo "<br>";
echo in_array('apple',$food,true);
echo "<br>";
echo in_array(67,$food,true);                             //will print whitespace bcz here 67 is integer  and in arrray
                                                          // it is string

?>