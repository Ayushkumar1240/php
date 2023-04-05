<?php


$file="readme.txt";

if(file_exists($file))
{
    echo readfile("readme.txt");


   // copy("readme.txt","newfile.txt");


   //rename("newfile.txt","newnewfile.txt");


   //unlink("newnewfile.txt");

   //mkdir("newfolder");
}
else
{
    echo "File does not exists";
}



?>