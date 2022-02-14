<!-- 6. Create a script to construct the following pattern, using a nested for loop
 		*
 	   * *
 	  * * *
	 * * * *
    * * * * * -->

  
<?php

    for ($i = 0; $i < 5; $i++)
    {
       	for($k=5;$k>$i+1;$k--)
        {
            echo "&nbsp;";
        }
        for($j = 0; $j <= $i; $j++ )
        {
              
            
            echo "* ";
        }
  
       
        echo "<br>";
    }

  
?>