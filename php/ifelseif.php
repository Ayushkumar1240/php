<?php

$per=56;


if($per>85 && $per<=100)

    echo "you are in merit list";

elseif($per >60 and $per<85)

    echo "you are in first division";

elseif($per >33 && $per<60)
    print ("you are in 2nd division");

elseif($per<33)

    print ("you are fail");

else
    print ("enter a valid percentage")


?>