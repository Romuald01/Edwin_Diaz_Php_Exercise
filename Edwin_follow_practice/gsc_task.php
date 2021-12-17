 <?php 
$id = "Toyota venza";
$button = 'check cars';


$name = "computer";
$value = 100;
$expiration = time() + (60 * 60 * 24 * 7 * 365);
setcookie("$name","$value","$expiration");

session_start();
$_SESSION["occupation"] = "i want to be a software developer";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies and session task page</title>
</head>
<body>

<a href="gsc_task.php?id=<?php echo $id?>"><?php echo $button . "<br>";?></a>

<?php echo $id . "<br>";  ?>

<?php
        if(isset($_SESSION["occupation"])) {
            echo $_SESSION["occupation"] . "<br>";
        }

        if(isset($_COOKIE["$name"])) {
            echo $_COOKIE["$name"];
        }

?>
</body>         