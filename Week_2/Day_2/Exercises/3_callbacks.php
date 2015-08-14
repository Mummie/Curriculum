<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php

        /**
         * Some functions in PHP take a parameter called a "callback".
         * A callback is a function that will be run somehow inside the
         * function that is calling it.
         * @see http://php.net/manual/en/function.array-filter.php
         */

        // Modify the function in our previous example to return "true" if
        // the score is greater than 5, and "false" if it is not.

        function score($name) {
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