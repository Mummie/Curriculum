<!-- 
	Using everything you have learned and some googling

	- Find all numbers between 1 and 100 that are divisible evenly by 3
	- From that list of numbers, also find all the numbers that divisible evenly by 6
	- Display each set of numbers with a comma delimited list
	- Also display how many numbers are divisible by 3 and by 6 respectively

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
                    }
                }
             print_r($numbers);

            ?>
        </p>
	</body>
</html>