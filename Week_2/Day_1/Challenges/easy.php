<!--
    Using everything you have learned and some googling

    Randomly pick a number between 1 and 7 and display it.
    Once that number is 7, stop :)

 -->

<!DOCTYPE html>
<html>
  <head></head>
	<body>
        <p>
            <?php

          	    // code goes here ...
          	    do {
          	     $random_int = rand(1,7);
          	     
          	      echo $random_int . "\n";
          	    }
          	    while($random_int != 7);

            ?>
        </p>
	</body>
</html>