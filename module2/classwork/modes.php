<?php
$handle=fopen("satyanarayan.txt","r");
// fwrite($handle,"ab");


// echo fgets($handle);
// echo "<br>";
// echo fgets($handle);
// echo fgets($handle);


while(!feof($handle))                       //end of file
{
    echo fgets($handle);
}

//echo fgets($handle);
// fwrite($handle,"hello");

// echo fread($handle);


?>