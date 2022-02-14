<!-- 9. Print below output using for loop
1 2 3 4 5
1 2 3 4
1 2 3
1 2
1 -->

<?php
function abc($n)
{

for($i=1;$i<=$n;$i++){
		for($j=1;$j<=$n-$i+1;$j++){
			echo $j;
		}
		echo"<br>";
	}
}
$n=5;
abc($n);

?>