<!-- 8. Print below output using for loop
1
2 1
3 2 1
4 3 2 1
 -->

<?php

function abc($n){
for($i=1;$i<=$n;$i++){
			for($j=$i;$j>=1;$j--){
				echo $j;
			}
			
		
		
		echo "<br>";
		}
	}
	$n=4;
	abc($n);
?>