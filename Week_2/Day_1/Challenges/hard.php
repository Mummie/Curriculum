<!-- 
	Using everything you have learned and some googling

	- Find all numbers between 1 and 100 that are divisible evenly by 3
	- From that list of numbers, also find all the numbers that divisible evenly by 6
	- Display each set of numbers with a comma delimited list
	- Also display how many numbers are divisible by 3 and by 6 respectively

	Expected Results

	 3, 6, 9, 12, 15, 18, etc
	 6, 12, 18, 24, 30, etc

	 Divisible by 3 = ###
	 Divisible by 6 = ###


 -->

<!DOCTYPE html>
<html>
    <head></head>
	<body>
        <p>

            <?php


                
                // code goes here ...
              
                $numbers_range = range(1,100);
                foreach($numbers_range as $numbers){
                    if($numbers % 3 == 0){
                        $numbers++;
                         echo $numbers . ", ";
                    }
                }
                echo "<br />";
                
                  for($i = 1; $i <= 100; $i++){
                    if($i%6 == 0){
                        $six++;
                        echo "{$i}, ";
                    }
                }
             print_r($numbers);

            ?>
        </p>
	</body>
</html>