<!DOCTYPE html>
<html> 
<head> 
<meta http-equiv="Content-Type" content= "text/html; charset=utf-8" />
<title> Untitle Document</title>
</head>

<body>
<?php
//extract($_POST);

//connect to server
$connect = mysqli_connect("localhost", "root", "", "amaclone");

if(!$connect) 
	{ 
		die ('ERROR:' .mysqli_connect_error());
	 }
?>
</body>
</html>