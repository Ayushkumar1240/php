<?php

$file=fopen("readme.txt","r");

//echo fread($file,40)."<br>";                                   //will read till 40bytes in the readme.txt file 


//echo fread($file,filesize("readme.txt"));                      // will read till the end of the file




echo fgets($file);                                           //will read first line of the file readme.txt
echo ftell($file)."<br>";                                    // will tell where the cursor is currently




echo fgets($file);                                           // will read second line of the file readme.txt
echo ftell($file)."<br>";





rewind($file);                                             //will take the cursor to the start of file



echo fgets($file);                                           // will read first line of the file readme.txt
echo ftell($file)."<br>";




fseek($file,15);                                           //cursor will points to 15th byte in file readme.txt 
echo fgets($file)."<br>";



echo fpassthru($file);                      // will start reading content of the file from last cursor point to EOF



rewind($file);                            //cursor at starting position


echo "<ul>";
while(!feof($file))                              //will read till end of file
{
    $line=fgets($file);                         //will take line by line entry in variable line till EOF.
    echo "<li>".$line."<br>"."</li>";
}
echo "</ul>";


rewind($file);
 



echo fgetc($file);                         // will print first character from the file
echo fgetc($file);                         // will print second character from the file


rewind($file);



echo "<pre>";
print_r (file("readme.txt"));
echo "</pre>";
?>