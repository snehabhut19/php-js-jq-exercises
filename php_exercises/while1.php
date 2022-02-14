<!-- 1. Print below output using while loop :
Executing - counter is 1.
Skipping number 2 because it is even.
Executing - counter is 3.
Skipping number 4 because it is even.
Executing - counter is 5.
Skipping number 6 because it is even.
Executing - counter is 7.
Skipping number 8 because it is even.
Executing - counter is 9.
Skipping number 10 because it is even -->


<?php
for($i=1;$i<=10;$i++)

{
	if($i%2==0){
		continue;
	}else
	{
		echo"Executing-count is".$i."<br>";
	}
}
?>