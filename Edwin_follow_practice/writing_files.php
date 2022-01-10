<?php

$file = "example.txt";
 
if($handle = fopen($file, 'w')) {
    fwrite($handle, "I love php,this is a very cool stuff and i will make sure i learn i very well");

fclose($handle);    
}else {
    echo "The Application was not able to write on the file";
}


?>