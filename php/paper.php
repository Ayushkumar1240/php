<!-- <?php
 declare(strict_types=1);
 function gla_Work(string $val_one,$val_two)
 {
     $value=printf("%x","$val_one");             //1
     echo "<br>";
     if($value <> $val_two and $value==1)
     {
         $data=str_split("$val_one",1);
         asort($data);
        foreach($data as $new_data)
         {
             echo $new_data;
         }
         echo "<br>";
     }
     else
     {
         $data=str_split("$val_one",1);
         ksort($data);
     }
     $data=implode(" ",$data);
     echo count_chars($data,3),"<br>";
     print_r(count_chars($val_one,3));
     echo "<br>";
     return $val_two + $value;
 }
 var_dump((float)gla_Work("WELcome Phpexam",85));
?> -->



<?php

 for($i=1;$i<=150;$i++)
 {
     if($i%3==0 && $i%5==0)
     {
         echo "rahulpradhan";
     }
     else if($i%3==0)
     {
         echo "rahul";
     }
     else if($i%5==0)
     {
         echo "pradhan";
     }
     else 
     {
       echo $i;
     }
 }
?>


<!-- <?php
$string="Hello Class PHP";
$newstring=count_chars($string,3);
echo $newstring;
?>
 -->
