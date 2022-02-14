<!-- 5. Write a PHP script to calculate and display average temperature, five lowest and
highest temperatures.
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Expected Output :
Average Temperature is : 70.6
List of seven lowest temperatures : 60, 62, 63, 63, 64,
List of seven highest temperatures : 76, 78, 79, 81, 85,
 -->

<?php

$a = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$num = explode(',', $a);
$total = 0;
$num_length = count($num);
foreach($num as $temp)
{
 $total+= $temp;
}
 $avg_high = $total/$num_length;
 echo "Average Temperature is : ".$avg_high."<br>
"; 
sort($num);
echo " List of five lowest temperatures : ";
for ($i=0; $i< 5; $i++)
{ 
echo $num[$i].", ";
}
echo "<br>";
echo "List of five highest temperatures :";
for ($i=($num_length-5); $i< ($num_length); $i++)
{
echo $num[$i].", ";
}

?>