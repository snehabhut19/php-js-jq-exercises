<!-- 13. Given this string $phone_number = "001-234-567678";
Print below output:
011
234
5675678 -->

<?php

$phone_number="001-234-567678";

$array=explode("-",$phone_number);

foreach ($array as $i) {
	echo $i."<br>";
	# code...
}



?>