<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /*
             * Write a program that loops through numbers array and outputs
             * each number.
             *
             * But for multiples of three print “Fizz” instead of the number
             * and for the multiples of five print “Buzz”. For numbers which
             * are multiples of both three and five print “FizzBuzz”
             *
             */

             $inputs = array(
               array('numbers' => range(0, 100))
             );
           
             
             foreach($inputs as $val){
                 foreach($val as $numbersArray){
                     foreach ($numbersArray as $num){
                     if($inputs % 3 == 0){
                    echo "Fizz";
             }
             if($num % 5 == 0){
                 echo "Buzz";
             }
             
             if($num % 5 == 0 && $num % 3 == 0){
                 echo "Fizz" . "Buzz";
             }
                     }
                 }
             }

        ?>

    </p>

    </body>
</html>
