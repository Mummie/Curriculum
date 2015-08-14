<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php

        /**
         * If you can't find a function you need in PHP, you can create it!
         * Let's modify our previous exercise to print the score for every name.
         */

        // Create a function to clean the name and 
        // print out the person's name and their "score"
        function score($name) {
            $name = ucwords(strtolower(trim($name)));
            $parts = explode(" ", $name);
             echo "<br />";
            $lastname = array_pop($parts);
            $firstname = implode(" ", $parts);
            echo "<br />";
            $score =  strlen($lastname) * stripos($name,'a') / str_word_count($name);
        
        // Print out the person's name and their "score"
            echo "$name : $score";
              
        }

        $names = [
            'JASON hunter',
            ' eRic Schwartz',
            'mark zuckerburg '
        ];

        // Add a couple extra names to the $names array
        array_push($names, "Seth", "Brian", "Ernesto", "Will");
     
        // loop through our names and call our function
        foreach($names as $name){
            score($name);
        }

        ?>

    </p>

    </body>
</html>