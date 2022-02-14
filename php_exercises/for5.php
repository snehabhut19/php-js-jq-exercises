<!-- 5. Write a PHP program to generate and display the first n lines of a Floyd triangle.
(use n=5 and n=11 rows).
1
2 3
4 5 6
7 8 9 10
11 12 13 14 15 -->

<?php

function abc($n)
{
	$num = 1;
	for ($i = 0; $i < $n; $i++)
	{
		
		for ($j = 0; $j <= $i; $j++ )
		{
			echo $num." ";
			$num = $num + 1;
		}
		echo "<br>";
	}
}
$n = 5;
abc($n);

?>
