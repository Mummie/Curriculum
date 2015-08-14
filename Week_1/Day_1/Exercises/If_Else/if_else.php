<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
        <p>
          <!-- 
            You can rent a car if you are 25 years of age or older put an if statement in
            to render "You are old enough to rent a car! Yay!" when you are old enough
          -->
          <?php
          $myAge = 27;
          if($myAge <= 24){
            echo "You can not rent a car!";
            
          }
          else {
            echo "You are old enough to rent a car! Yay!";
            
          }
          ?>
          
        </p>
	</body>
</html>