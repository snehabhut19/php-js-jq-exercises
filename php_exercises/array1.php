<!-- 1. $color = array('white', 'green', 'red'')
Write a PHP script which will display the colors in the following way :
Output :
white, green, red,
● green
● red
● white
 -->

 <?php
$color = array('white','green','red');

foreach ($color as $value) {
	echo $value.",";

}
sort($color);
// echo "<ul>";

foreach ($color as $value) {
	echo "<li>$value</li>";
}
// echo "</ul>";


 ?>