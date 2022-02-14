<!-- 12. Write code to print factorial of a number (number should be passed via
textbox)
Example of factorial : 5! = 5 * 4 * 3 * 2 * 1 = 120 -->
<?php
 if(isset($_POST['submit']))
 {
 	$fact=1;
 	$num=$_POST['num'];

 	 echo "factorial of $num :";
 	 for($i=1;$i<=$num;$i++)
 	 {
 	 	$fact=$fact*$i;
 	 }
 	 echo $fact. "<br>";
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
