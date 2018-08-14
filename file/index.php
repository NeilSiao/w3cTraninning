<!DOCTYPE <!DOCTYPE html>
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
    <?php $myfile = fopen("textfile.txt","a");
    $txt ="John Doe\r\n";
    //linux \n  windows \r\n
    fwrite($myfile,$txt);
    $txt = "Jane Doe\r\n";
    fwrite($myfile,$txt);
    fclose($myfile);

    $s=null;
    echo "empty" . empty($s)."<br>";
    echo "issue" . isset($s)."<br>";
    $g= 0;
    echo "empty" . empty($g)."<br>";
    echo "issue" . isset($g)."<br>";
    

?>
<h1>Upload file </h1>
<form action="uploads/upload.php" method = "post" enctype="multipart/form-data">
    Select image to upload <br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br>
    <input type="submit" value="Upload Image" name="submit">

</form>
</body>
</html>