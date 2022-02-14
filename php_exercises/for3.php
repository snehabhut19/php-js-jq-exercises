<!-- 3. Create a script to construct the following pattern, using nested for loop.
*
* *
* * *
* * * *
* * * * * -->



<?php

    for ($i = 0; $i < 5; $i++)
    {
       
        for($j = 0; $j <= $i; $j++ )
        {
              
            
            echo "* ";
        }
  
       
        echo "<br>";
    }

  
?>