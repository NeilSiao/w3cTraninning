<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator{
    function _construct($it){
        parent::_construct($it, parent::LEAVES_ONLY);
    }
    function current(){
        return "<td style='width:150px;border:1px solid black;'>" . parent::current() . "
        </td>";
    }
    function beginChildren(){
        echo "<tr>";
    }
    function endChildren(){
        echo "</tr>" . "\n";
    }
}

$servername= "localhost";
$username = "root";
$password = "";
$dbname = "mydbpdo";

try{
    $conn= new PDO("mysql:host=$servername;dbname=$dbname",$username,
$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt =$conn->prepare("select id,firstname,lastname from myguests");
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
/*RecursiveArray will keep a array which may contain many subArray. use it to echo every value
as $k=>$v you can echo key or value.
*/
foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v){
    echo $v;}
} catch(PDOException $e){
    echo "Error: ".$e->getMessage();
}

$conn = null;
echo "</table>";


?>