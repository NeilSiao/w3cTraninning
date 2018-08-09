<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php 
/*this is interesting part, you
 should check if get got something or not first.*/
if(!empty($_GET['XSS']))
    echo ">>" .$_GET['XSS'];
?>
    >><form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <input type="text" name="XSS"> <br>
    <input type="submit" value="Submit"> <br>
    </form>
</body>
</html>