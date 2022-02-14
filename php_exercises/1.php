<?php

if(isset($_POST['submit']))
{
	$num = $_POST['num'];
	$sum = 0;
	for ($i=0; $i < $num ; $i+=2) 
	{ 
		$sum += $i;	


	}
	echo $sum;
}
?>
 <!DOCTYPE html>
<html>
<head>
	<title>php program </title>
</head>
<body>
	<form method="POST">
	<input type="text" name="num" value="" placeholder="">
	<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>
