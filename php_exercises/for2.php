<!-- 2. Create a script using a for loop to add all the integers between 0 and 30 and
display the total. -->

<?php
$sum=0;
for($a=1;$a<=30;$a++)
{
	$sum+=$a;
}
echo "the sum of the numbers 0 to 30 is sum".":".$sum;
?>