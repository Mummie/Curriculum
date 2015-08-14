<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
        <p>

            <?php

                // Display the first 6 even numbers greater than 12 using a for loop
                for($i = 13; i <= 24; $i = $i + 2){
                    if($i % 2 == 0){
                    echo $i . "<br />";
                }
}
        
            ?>

        </p>
	</body>
</html>