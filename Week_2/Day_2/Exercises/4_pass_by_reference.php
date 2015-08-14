<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php

        /**
         * Copy exercise 3 into this file and add a single character
         * to save our modifications to our names.
         * @hint: Google the name of this file + PHP
         */
function score(&$name) {
            $name = ucwords(strtolower(trim($name)));
            $parts = explode(" ", $name);
             echo "<br />";
            $lastname = array_pop($parts);
            $firstname = implode(" ", $parts);
            echo "<br />";
            $score =  strlen($lastname) * stripos($name,'a') / str_word_count($name);
        
        return $score > 5;
}
        $names = [
            'JASON hunter',
            ' eRic Schwartz',
            'mark zuckerburg '
        ];

        // Add a couple extra names to the $names array
        array_push($names, "Seth Handy", "Brian", "Derek Wall");

        // Without writing a loop, use an array function to filter our list
        // of names down to only those who pass the score test.
        $names = array_filter($names, 'score');
        if($score >= 10){
            print_r($names);
        }

        // Without writing a loop, print out the winners separated by a comma and a space
        $passName = implode($names);
        echo $passNames;
        // Question: Do the names look right?


        


        ?>

    </p>

    </body>
</html>