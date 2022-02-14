<!-- 2.Print only even numbers from 1 to 100 and skip all numbers that are divisible by 3.

 -->
<?php
$x=1;

while($x<=100){
	if($x%2==0){
		if($x%3!=0){
	
	echo "$x <br>";
}
}
	$x++;

}
?>