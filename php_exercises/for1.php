<!-- 1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no
hyphen(-) at the starting and ending position
 -->

<?php
for($x=1; $x<=10; $x++)
{
 if($x< 10)
 {
 echo "$x-";
 }
 else
  {
 echo "$x"."\n";
  }
}

?>