<!-- sessions are really a way to get users information.
sessions are similar to cookies and cookies save information.
what we do is that we create a file right just by startin a function.we create a file in our server to save the user information
and then when user come innto trhat specific page or application we set cookie in their browser without a reference to the file
we have in the browser. So that way the user information is going to be saved in our server. so we can save alot of infromation.
instead with cookies we can only save a little bit of information because we saving that information in the user's browsers not the serverso we have
more control oiver storage.
session_start() function create file in the browser. 
sessions,you can use it to save alot more data than cookies that save little data.
(S.D)"
The associative array is a variable that holds value,so all super global variable that has an associative array,the associative array 
stands as a variable receiving value".
the session_start will be on every page 


-->
<?php
    session_start();
    $_SESSION['greetings'] = "Hello my Code mate,We are building a CBT SYSTEM TODAY FOR HARVARD UNIVERSITY";
    

 

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
    
</body>
</html>