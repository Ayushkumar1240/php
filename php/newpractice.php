<?php
// $comb ="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
// $shuffel_1 = str_shuffle($comb);
// $res = substr($shuffel_1,0,8);
// echo $res;

 
 
// for($i=0;$i<=5;$i++){  
// for($k=5;$k>=$i;$k--){  
// echo "  ";  
// }  
// for($j=1;$j<=$i;$j++){  
// echo "*  ";  
// }  
// echo "<br>";  
// }  
// for($i=4;$i>=1;$i--){  
// for($k=5;$k>=$i;$k--){  
// echo "  ";  
// }  
// for($j=1;$j<=$i;$j++){  
// echo "*  ";  
// }  
// echo "<br>";  
// }  


    
// $season=array("summer","winter","spring","autumn");    
// $reverseseason=array_reverse($season);  
// // foreach( $reverseseason as $s )    
// // {    
// //   echo "$s<br />";    
// // } 
// print_r($reverseseason); 



// $str="what a beautiful day23!!!";
// echo (count_chars($str,3));
// // echo metaphone($str);

// for($a=1;$a<=10;$a++)
// {
//    if($a==13)
//    {
//     goto abc;
//    }
//    echo $a;
// }
// echo "hello";
// abc:
// echo "this is new code";


// echo convert_cyr_string("hello??????",'w','k');
 

$str="hello there no1 BFCD";
// print_r(count_chars($str,1));
// echo "<br>";
// $new=str_split($str);
// print_r($new);
// echo "<br>";
// print_r(array_count_values($new));
// echo "<br>";
// echo(count_chars($str,3));

// $newstr=explode($str,1);
// natsort($newstr);
// $newstr2=count_chars($newstr,3);
// echo $newstr2;

declare(strict_types=1);
function gla_Work(string $val_one,$val_two)
{
    $value=printf("%x","$val_one");
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

?>
