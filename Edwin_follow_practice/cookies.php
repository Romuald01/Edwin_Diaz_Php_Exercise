<?php

$name = "RomualdTech";
$value = "1000";
$expiration = time() + (60 * 60 *24 * 7 * 365);
setcookie("$name","$value","$expiration");

// cookies allows us to personalize users visit in a website and help us to send infromation into users browsers.
// we can do things depending on the users value and test for anything. The cookie values are saved 
// in cookie super global variable.
// the isset keyword is also used if something is available. it is an associative array because it has [].
// it is written as $_COOKIE[].
// all super global variable is an associative array because it has [] symbols(self discovery,confrim if itis true).
// you can set multiple cookies on our users browsers and personalize thier visit and also change cookies. 

?>


 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Reading the cookie value -->
    <?php
if(isset($_COOKIE["RomualdTech"])) {
$someOne = $_COOKIE["RomualdTech"];
echo $someOne;

}else{
        echo "Cookies name is not found";
}



?>
</body>
</html>