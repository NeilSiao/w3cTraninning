<?php
$servername = "localhost";
$username = "root";  //default account without pwd.
$password = "";
$dbname = "mydbpdo";
try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    //set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>";
    /*
    $sql = "create database mydbpdo";
    $conn->exec($sql);
    echo "Database created successfully<br>";
    */
    /* create table.
    $sql = "create table myguests (
        id int(6) unsigned auto_increment primary key,
        firstname varchar(30) not null,
        lastname varchar(30) not null,
        email varchar(50),
        reg_date timestamp
        )";
        $conn->exec($sql);
        echo "Table MyGuests created successfully";
        */

        //multiple query
        
       
//begin the transaction
$conn->beginTransaction();
$conn->exec("insert into myguests(firstname,lastname,
email) values('John','Doe','john@example.com')");

$conn->exec("insert into myguests(firstname,lastname,
email) values('Neil','Siao','john@example.com')");
$conn->exec("insert into myguests(firstname,lastname,
email) values('james','lin','john@example.com')");
$conn->commit();
echo "new records created successfully";
    $last_id = $conn->lastInsertId();
    echo "insert OK" . $last_id;
}catch(PDOException $e){
    // roll back the transaction if something failed.
    $conn->rollback(); 
    echo "Connection failed: " . $e->getMessage();
}


$conn=null; //close connection
?>