<!-- 4. Create a script to construct the following pattern, using a nested for loop
*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
* -->

<?php

for ($i = 0; $i <5; $i++)
    {
       
        for($j = 0; $j <= $i; $j++ )
        {
              
            
            echo "* ";
        }
  
       
        echo "<br>";
    }

    for ($i = 6; $i >1; $i--)
    {
       
        for($j = $i; $j>1; $j--)
        {
              
            
            echo "* ";
        }
  
       
        echo "<br>";
    }
    ?>