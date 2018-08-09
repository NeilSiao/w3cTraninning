<!DOCTYPE html>
<html>
<head>
	<title>CSS testing</title>
</head>
<body>

<!--
"><script>alert('alert')</script>
-->

<?php 
echo $_SERVER['PHP_SELF'] . "<br>";
#use PHP_SELF Could cause XSS Attack
/*
if you use this url in IE
http://localhost/w3cTraninning/Home/css.php/"><script>alert('hacked'); window.location.replace("http://stackoverflow.com");</script>
it will use XSS to redirect you to another website.
*/
 ?>

<form method="post" action="<?php echo 
$_SERVER['PHP_SELF'];   
?>">

Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit" value="submit">
</form>

asd
<!--/w3cTraninning/Home/css.php"> -->


</body>
</html>

