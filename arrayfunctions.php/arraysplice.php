<?php
$color=['red','green','blue','yellow','brown'];
$fruit=['orange','apple'];

// array_splice($color,1);

// print_r($color);
// echo "<br>.<br>";



// array_splice($color,2);

// print_r($color);
// echo "<br>.<br>";



// array_splice($color,2,1);

// print_r($color);
// echo "<br>.<br>";



// $newarray=array_splice($color,1,-1);

// print_r($newarray);
// echo "<br>.<br>";



// $newarray=array_splice($color,1,-2);

// print_r($newarray);
// echo "<br>.<br>";




// $newarray=array_splice($color,-1);

// print_r($newarray);
// echo "<br>.<br>";



// $newarray=array_splice($color,0,1);

// print_r($newarray);
// echo "<br>.<br>";




// $newarray=array_splice($color,2,2);

// print_r($newarray);
// echo "<br>.<br>";



//delete red

// array_splice($color,0,1);
// print_r($color);
// echo "<br>";

 

//delete green

// array_splice($color,1,1);
// print_r($color);


//delete blue

// array_splice($color,2,1);
// print_r($color);




//delete yellow

// array_splice($color,3,1);
// print_r($color);

// array_splice($color,-2,1);
// print_r($color);



//delete brown

// array_splice($color,4,1);
// print_r($color);

// array_splice($color,-1,1);
// print_r($color);



//delete green to blue

// array_splice($color,1,2);
// print_r($color);


//delete green to yellow

// array_splice($color,1,3);
// print_r($color);




//adding elements a specific places
//delete red and green and insert orange and apple in place of it.

// array_splice($color,0,2,$fruit);
// print_r($color);



//delete blue and yellow and insert friuts at place of them
// array_splice($color,2,2,$fruit);
// print_r($color);



// array_splice($color,2,count($color),$fruit);
// print_r($color);


//to include elements in a an arary without deleting any element

// array_splice($color,2,0,$fruit);
// print_r($color);



//to insert a last

// array_splice($color,count($color),0,$fruit);
// print_r($color);



//to insert at beginning

array_splice($color,0,0,$fruit);
print_r($color);
?>