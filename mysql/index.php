<!DOCTYPE html>
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
$servername = "localhost";
$username = "root";  //default account without pwd.
$password = "";
$dbname="mydb";
$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
/*
$sql = "create database myDB";
if($conn->query($sql) === TRUE){
    echo "Database created successfully";
}else{
    echo "Error creating database:" . $conn->error;
}
/*
mysqli procedural 
if(mysqli_query($conn,$sql)){
    echo "Database created successfully";
}else{
    echo "Error creating database:" . mysqli_error($conn);
}
*//*
$sql = "create table MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname varchar(30) not null,
    lastname varchar(30) not null,
    email varchar(50),
    reg_date Timestamp
    )";
if($conn->query($sql)===true){
    echo "table MyGuests created successfully";
}else{
    echo "error creating table: " . $conn->error;
}*/
/*
$sql = "INSERT into myguests (firstname, lastname,email) values
('John','Doe','john@example.com')";
if($conn->query($sql)===true){
 $last_id = $conn->insert_id;
 echo "New record created successfully. Last inserted ID is: " . $last_id;
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/
$sql = "select id, firstname, lastname from myguests";
$result = $conn->query($sql);
if($result->num_rows > 0){
    //output data of each row
    echo "<table style ='border :solid 1px black;'><tr><th>ID</th><th>Name</th></tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["firstname"] . 
        " " . $row["lastname"] . "</td></tr>";
    }
    echo "</table>";
}else {
    echo "no result";
}

mysqli_close($conn);
?>
</body>
</html>
