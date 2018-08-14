<?php
/*
if(!file_exists("welcome.txt")){
    die("File not found");  // stop the script;
}else{
    $file = fopen("welcome.txt","r");
}*/
set_error_handler("customError",E_USER_ERROR);

function customError($errno,$errstr){
    echo "<br><b>Error:</b> [$errno] $errstr<br>";
    ECHO "Webmaster has been notified";
    error_log("Error: [$errno] $errstr",1,"nsps5203@gmail.com"
    ,"From: webmaster@example.com");  //TBD to be determined.
    echo "Ending Script";
    die();// stop the script
}
echo($test);
echo("ss");

$test = 2 ;
if($test>=1){
    trigger_error("Value must be 1 or below",E_USER_WARNING); //throw as errstr.
}

?>