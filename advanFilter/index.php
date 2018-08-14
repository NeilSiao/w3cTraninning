<?php
    $int = 122;
    $min = 1;
    $max = 200;
    if(filter_var($int,FILTER_VALIDATE_INT,array("options" => array("min_range" =>$min,
    "max_range"=>$max)))==false){
        echo("Variable value is not within the legal range");
    }else{
        echo("Variable value is within the legal range");
    }

    $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    echo("<br>$ip is a valid IPv6 address");
} else {
    echo("<br>$ip is not a valid IPv6 address");
}

$url = "https://www.w3schools.com";

if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo("<br>$url is a valid URL");
} else {
    echo("<br>$url is not a valid URL");
}
$str = "<br><h1>Hello WorldÆØÅ!</h1>";

$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo "<br>".$newstr;
?>