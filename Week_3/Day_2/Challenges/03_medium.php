<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /*
             * Tax Calculator
             * Create a function that calculates the cost with tax of an item
             * The function must accept 2 parameters. $cost and $tax
             * The function must return the $meal_cost with tax
             * Print the results to the screen in the format:
             * Vince went to FL to buy some Mellow Mushroom, it costed him $106.50
             */

            $state_tax = array('NC' => 0.07, 'NY' => .094, 'FL' => 0.065);
            $people = array(
                'Eric' => array('state' => 'NC', 'meal' => 74.10, 'food' => 'Bad Daddys'),
                'Vince' => array('state' => 'FL', 'meal' => 100, 'food' => 'Mellow Mushroom'),
                'James' => array('state' => 'NY', 'meal' => 4500, 'food' => 'Mc Donalds')
            );

            function calculateTax($meal_cost,$tax) {
               $priceTax = $meal_cost * $tax;
                return $meal_cost + $priceTax;

                
            }
            
            
            
            $meal_cost = $person['meal'];
            
            
            
            function dd($arg){
                die(var_dump($arg));
            }
             foreach($people as $key => $person){
                   echo $key . "went to" . $person['state'] . "to go to" . $person['food'];
                   echo "<br />";
                   echo calculateTax($person["meal"], $state_tax['state']);
                   dd($meal_cost);
                }
            



        ?>

    </p>

    </body>
</html>
