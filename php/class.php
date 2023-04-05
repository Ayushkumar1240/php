<!-- <?php
// $value=printf("%x","Welcome php");
// echo $value; 
$data=str_split("WElcome Phpexam");
//asort($data);
foreach($data as $new_data)
{
    echo $new_data;
}
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
