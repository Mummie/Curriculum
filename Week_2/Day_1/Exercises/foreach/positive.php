<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
        <p>
            <?php

                $intArray = array(0, 1, 5, M_E, -3, 2, -2, -10, 5, 4, M_PI);

                // display all numbers that are less zero

                // code goes here ...

                foreach($intArray as $number){
                    if($number < 0){
                        echo $number . "<br />";
                    }
                }
                


            ?>
        </p>
	</body>
</html>