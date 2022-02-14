<!-- 4. Given this array : $arr_num = array(5, 10, 15, 20, 25);
Print below output:
5
10
15
20
25
Array ( [0] => 10 [1] => 20 [2] => 30 [3] => 40 [4] => 50  -->


<?php

$arr_num=array(5,10,15,20,25);
// $l=count($arr_num);

for($x=0;$x<=4;$x++)
echo $arr_num[$x]."<br>";

$arr_num1=array(10,20,30,40,50);
 print_r($arr_num1);
?>