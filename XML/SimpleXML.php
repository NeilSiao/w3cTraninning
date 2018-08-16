<?php
$myXMLData = 
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Tove</to>
<from>Neil</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend</body>
</note>";
$xml = simplexml_load_string($myXMLData) or die("Error: Cannot create object");
print_r($xml);

$xmlFile =simplexml_load_file("note.txt") or die("Error: Cannot create object");
print_r($xmlFile);
echo $xmlFile->to . "<br>";
echo $xmlFile->from . "<br>";
echo $xmlFile->heading . "<br>";
echo $xmlFile->body . "<br>";
$xmlBook = simplexml_load_file("books.xml") or die("Error: Cannot create object");
echo "<br>" . $xmlBook->book[0]->title . "<br>";
echo $xmlBook->book[1]->title . "<br>";
echo $xmlBook->book[0]['category'] . "<br>";

foreach($xmlBook->children() as $books) { 
    echo $books->title . ", "; 
    echo $books->author . ", "; 
    echo $books->year . ", ";
    echo $books->price . "<br>"; 
} 

?>