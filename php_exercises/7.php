<?php


function abc($n)
{


for ($i = 1; $i < $n; $i++) {
  for ( $j = 0; $j <=$n-1; $j++) 
    echo "*" ;

  
  echo "<br>";
}
}
$n=5;
abc($n);

?>