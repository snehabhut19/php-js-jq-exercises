<!-- 4. array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key
 -->

 <?php
$a=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

// a) ascending order sort by value
asort($a);

foreach ($a as $name => $age) {
	echo "name is ".$name ." and age is".$age."<br>";

}

echo "<br><br>";
// b) ascending order sort by Key


ksort($a);

foreach ($a as $name => $age) {
	echo "name is ".$name ." and age is".$age."<br>";

}


echo "<br><br>";

// c) descending order sorting by Value
arsort($a);

foreach ($a as $name => $age) {
	echo "name is ".$name ." and age is".$age."<br>";

}
echo "<br><br>";


// d) descending order sorting by Key

krsort($a);

foreach ($a as $name => $age) {
	echo "name is ".$name ." and age is".$age."<br>";

}


 ?>