<?php
$handle=fopen("section.txt","w");
fwrite($handle,"Hello class");
fclose($handle);

$handle=fopen("section.txt","r");
// echo fgetc($handle);
// echo fgetc($handle);

while(!feof($handle))                       //end of file
{
   $data = fgetc($handle);
   if($data=="/n")
   {
    $data="<br>";
   }
   echo $data;
}


copy("section.txt","section2.txt");




unlink("section.txt");                       //to delete file from memory


if(file_exists("section.txt") or die(" file doesn't exist"));


// while(!feof($handle))                       //end of file
// {
//     echo fgets($handle);
// }
?>