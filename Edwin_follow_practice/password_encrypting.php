<?php

$password = "Romuald2018";
$salt = "iusemadstrings100";
$encryting = crypt($password,$salt);
echo $encryting;