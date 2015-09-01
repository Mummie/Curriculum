<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /*
             * Write a PHP script to calculate and display average temperature, 
             five lowest and highest temperatures.
            
            Expected Output :
            Average Temperature is : 70.6 
            List of seven lowest temperatures : 60, 62, 63, 63, 64, 
            List of seven highest temperatures : 76, 78, 79, 81, 85,
            */

            $temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76,
            63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64,
            68, 73, 75, 79, 73);
            
          
               
                $average = array_sum($temperatures) / (count($temperatures));
                sort($temperatures);
                echo "Five lowest temperatures" . $temperatures[0] . $temperatures[1] . $temperatures[2] . $temperatures[3] . $temperatures[4];
                echo "Five highest temperatures" . $temperatures[29] . $temperatures[28]. $temperatures[27]. $temperatures[26]. $temperatures[25];
                
                
            

        ?>

    </p>

    </body>
</html>