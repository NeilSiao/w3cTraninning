<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("note.txt");
print $xmlDoc -> saveXML();
$x = $xmlDoc->documentElement;
foreach($x->childNodes as $item){
    print $item->nodeName . " = " . $item->nodeValue . "<br>";
}
?>