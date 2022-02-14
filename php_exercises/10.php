<!-- 10. Print below output using for loop
5
5 4
5 4 3
5 4 3 2
5 4 3 2 1 -->

<?php
for ($i=5; $i >= 1 ; $i--) { 
	for ($j=5; $j >= $i ; $j--) { 
		echo "&nbsp;".$j;
	}
	echo "<br>";
	
}

?>