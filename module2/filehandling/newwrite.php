<?php


$file=fopen("readme.txt","r+");            // r+ mode will overwrite in the file tarting from first line 

fwrite($file,"this is the new overwritten line.");






$file=fopen("readme1.txt","w+");             // w+ mode will erase the whole data and replace with this single line 

fwrite($file,"this is the new overwritten line");





$file=fopen("readme3.txt","a+");         // a+ mode will not erase the data rather 
                                         //it will enter the data at the last of the file where the cursor points.

fwrite($file,"\n here is the new line");
fputs($file,"\n hey whats up");             //similar as fwrite


fclose($file);                      // will close the file readme3.txt



$file=fopen("readme4.txt","a+");
ftruncate($file,50);                      // will keep first 50 characters of the file and will delete rest



?>