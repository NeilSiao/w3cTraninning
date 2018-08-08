<!DOCTYPE html>
<html>
<body>
<h1>Myfirst PHP page</h1>
<?php
echo "My first PHP script! ";
//This is a single-line comment
# This is also a single-line comment
/* keyword (e.g. if, else, while, echo, etc) is not
case-sensitive but variables are. */
$x = 5 /* + 15 */ +5;
echo $x ;
ECHO "HELLO WOLRD!<br>";
EcHo "Hello world!<br>";

$color = "red";
echo "my car is ". $color . "<br>";
echo "my car is ". $COLOR . "<br>";
echo "my car is ". $coLOR . "<br>";

$txt = "W3Schools.com";
echo "I love $txt!" . "<br>";
echo "I love " . $txt . "!<br>";
$x = 5;
$y = 4;
echo $x + $y;
myTest();
function myTest(){
    //using x inside this function will generate an error
   //global $x; the position of this line, could make different
    $x = 10;// can not access global var
    global $x ;  // use global then make it work
    echo "<p>Variable x inside function is: $x</p>";

}

echo "<p>Variable x outside function is: $x</p>";

//global arrays
$var = 5;
$var2 = 10;

function globalTest(){
    $GLOBALS['var'] = $GLOBALS['var2'] + $GLOBALS['var'];
}
globalTest(); //add var together;
echo $var;

//GLOBALS   THIS IS A KIND OF VARIABLE, IT'S CASE-SENSITIVE.
$stest = 0;
function staticTest(){
    static $x = 0;  //USE STATIC TO KEEP VAR ALIVE.
    echo "<br>". "x: " . $x . "stest: ". $GLOBALS['stest'] . "<br>" ;
    $x++;
    $GLOBALS['stest'] = $GLOBALS['stest']+ 1 ;
}
staticTest();
staticTest();
staticTest();
/*String can use "   "  or  '  '  */ 
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

$type = 2536;
echo "<br>";
var_dump($type); //show data type;
$x = 10.36528;
var_dump($x);
$x = true;
$cars = array("volvo","BMW","Nissan,","Buggatii");
var_dump($cars);

define("GReeting","Welcome to W3Schools.com!",true);
//everyone can just use the constants. true mean it is NOT case-sensitive
class Car {
    function Car() {
        $this->model = "VW";
        echo "<br>";
        echo "<br>";
        echo greeting;
        echo "<br>";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo "<br>";
echo strlen($herbie->model);
echo "<br>";
echo str_word_count("Hello wolrd!");
echo strrev("Hello world!");
#String start at 0
echo strpos("Hello world!","world");
echo "<br>";
echo str_replace("world","Dolly", "Hello world!");
echo "<br>";
$str = addcslashes("Hello World!","W");
echo($str); 
echo md5("Neil");

$s=null;
echo var_dump($s);
?>



</body>
</html>