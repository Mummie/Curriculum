<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
        <p>
          <?php
          	// From within the PHP tags make your name render 3 different ways
          	$name = "Seth";
          	echo "Seth". " ".$name;
          	print "\nSeth";
          	
          ?>
          <?= "Seth" ?>
          <h3> Seth </h3>
        </p>
	</body>
</html>