<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
</head>
<body>
    <table>
        <tr>
            <td>Filter Name</td>
            <td>Filter ID</td>
</tr>
<?php
    foreach (filter_list() as $id => $filter) {
        # code...
        echo "<tr><td>" . $filter . "</td><td>" . filter_id($filter) . "</td></tr>";
    }
?>
</table>
<?php
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str,"513");  //means string or you can use 
$newstr_2 = filter_var($str,FILTER_SANITIZE_STRING);
echo $newstr . "<br>";
ECHO $newstr_2 ;

$int = "0";  //intersting part In php 0 is not a int
//you need to set if else to check it.
if ((!filter_var($int,FILTER_VALIDATE_INT) === false)
|| filter_var($int,FILTER_VALIDATE_INT) === 0 ){
    echo("<br>Integer is valid");
    // at here === is as same as ==, no difference.
}else{
    echo("<br>Integer is not valid");
}

$ip ="<SCRIPT>127.0.0.1</SCRIPT>";
if (!filter_var($ip,FILTER_VALIDATE_IP) ==false){
    echo("<br>$ip is a valid IP address"); 
    // echo shouldn't echo $ip, otherwise it will cause XSS attack
}else{
    $ip = filter_var($ip,FILTER_SANITIZE_STRING); 
    echo("<br>$ip is a invalid IP address");
}

$email = "john.doe@example.com";
$email = filter_var($email,FILTER_SANITIZE_EMAIL);
//$email = filter_var($email,FILTER_SANITIZE_STRING);
//STRING IS SAME AS EMAIL
if (!filter_var($email,FILTER_VALIDATE_EMAIL)== false){
    echo("<br>$email is a valid email address");
}else{
    echo("<br>$email is not a valid email address");
}


?>
</body>
</html>