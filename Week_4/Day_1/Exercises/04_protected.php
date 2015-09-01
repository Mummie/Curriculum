<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

    <?php

    /**
     * Let's protect our class' properties so no one can change the name or health directly.
     *
     * Copy your class from the previous exercise, then change the properties to be protected.
     *
     * Once the properties are protected you will need to add GETTER methods so we can still
     * access the values. So, add two methods called "getName" and "getHealth" that return the
     * value of the name and health properties respectively.
     *
     * Finally, now that your name and health properties are protected, fix the line that
     * prints out each monster's name and health.
     */

    
    ///////////////////////////
    // Put your code here!
    ///////////////////////////

    class LivingThing{
        
        protected $name;
        protected $health;
        function __construct($name, $health){
         $this->name = $name;
         $this->health = $health;   
        }
       
        public function isAlive(){
        return ($this->health > 0);
        
    }
    protected function getName(){
        return $this->name;
    }
    
    protected function getHealth(){
        return $this->health;
    }
    public function getProtected(){
        return $this->getHealth();
        return $this->getName();
    }
    
    
    
    }
    
    $rat = new LivingThing("Rat", 5);
    
    
    
    $goblin = new LivingThing("Goblin", 30);
    
    
    
    $ogre = new LivingThing("Ogre", 80); 

    $monsters = array($rat,$goblin,$ogre);
    echo "<h3>Protecting our monsters</h3>";

    foreach ($monsters as $monster) {
        // Fix the line below!
        echo $monster->getProtected();
        
    }

    ?>

</p>

</body>
</html>