<?php
$cookie_name="user";
$cookie_value = "Alex Porter";
setcookie($cookie_name,$cookie_value,time() + (86400*30),"/");
//setcookie must appear before the html tag.
//set the expiration date to one hour ago, cookie will disapear.
setrawcookie(true); 
//WE DONT USE URL ENCODing,because there are plenty different charset
//out there will cause big problem 
?>


<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php

if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie named '"  .  $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set! <br>";
    echo "Value is: " . $_COOKIE[$cookie_name] . "<br>";
    print_r($_COOKIE);
}
?>


</body>
</html>
