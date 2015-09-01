<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <p>
    <?php
        /**
         * OVERVIEW:
         * So our boss is now happy that he can see the descriptions in a consistent manner.
         * However, he does not like the idea that the description still prints out even if
         * we don't provide all of the necessary information.  He also wants the color
         * field to consist of only a specific list of colors so that customers can search
         * by color.  He also hates the inconsitent formats of the price.  Sometimes they
         * have numbers only, sometimes they have $, etc.
         *
         * INSTRUCTIONS:
         * 1. Let's do some validation in the provideDescriptionForProductType.  First, Instead
         * of accessing our properties directly, let's create getter functions for them and
         * access our properties in the provideDescriptionForProductType using these getters.
         * If these values are empty, let's throw an exception with the message.
         * 'Empty value found';
         *
         * 2. Now, let's add some additional validation to a few of our accessors.  Let's only
         * red, blue, green, black, white, yellow to be valid colors.  If our color
         * is not one of these colors, let's throw an Exception.
         *
         * 3. In our price getter, let's throw an Exception if it has any non-numeric characters
         * in it (like the word dollars).  PHP has a function is_numeric($value) that
         * determines if the string is a valid number.  If it is not a number, throw
         * an exception with the message 'invalid number';
         *
         * 4. Now create the following objects:
         *
         * Clothing Objects:
         *
         * Name: Button Down Shirt
         * Price: $29.88
         * Brand: J Peterman
         * Color: Eye-piercingly bright red
         * Type: Shirt
         * Gender: Male
         *
         * Name: Headband
         * Price: 9 dollars
         * Brand: Nikee
         * Color: Magenta
         * Type: Headgear
         * Gender: Neutral
         *
         * Television Objects:
         *
         * Name: Giant TV
         * Price: $3900.90
         * Brand: Kramerica
         * DisplayType: LED
         * Size: 100 inches
         *
         * Name: Child Television
         * Price: 299
         * Brand: ChildCorp
         * DisplayType: Plasma
         * Size: 23x33
         *
         * 5. Echo out the descriptions.  If the description is valid display it.  If there
         * is an exception, display 'There was an error determining the description to this
         * product'.  Remember how to handle exceptions with try catch.
         *
         * @see http://php.net/manual/en/language.exceptions.php
         */


        ///////////////////////////
        // Put your code here!
        ///////////////////////////
        
         interface Describable {
          public function provideDescription();
          
        }
         abstract class Product implements Describable {
           
           
           public function __construct($name,$price,$brand){
             $this->name = $name;
             $this->price = $price;
             $this->brand = $brand;
           }
           
           
          abstract public function getDescriptionforProductType();
           
          protected $name;
          protected $price;
          protected $brand;
          
          
          
          
          
         public function provideDescription(){
          return $this->getDescriptionforProductType();
         }
        
        }
        
        
        
         class Clothing extends Product  {
          protected $size,$color,$type,$gender;
          public $correct_Color = array("red, blue, green, black, white, yellow");
          
           public function getDescriptionforProductType(){
           return "This is an article of 
            clothing.  It is a {$this->brand} {$this->getColor()} {$this->gender} {$this->type} of size {$this->size}.  It costs {$this->price}";
         }
           
          public function __construct($name,$price,$brand,$size,$color,$type,$gender){
            parent::__construct($name,$price, $brand);
            
            
            $this->size = $this->setSize($size);
            $this->color = $this->setColor($color);
            $this->type = $this->setType;
            $this->gender = $this->setGender;
          }
          
          
          
          public function getSize($size){
            return $this->size;
          }
          
          public function setSize($size){
            if(!empty($size)){
              $this->size = $size;
            }
            else {
              throw new Exception("Not a valid size");
            }
          }
          
          
      
          public function getColor($color){
            
            return $this->color;
          }
          
          
          
          public function setColor($color){
            if(!empty($color)){
              if(in_array($color,$this->correct_Color){
                $this->color = $color;
              }else{
                throw new Exception("Not a valid color");
              
              }
            }
          }
          
          
          public function getType($type){
            return $this->type;
          }
          
          public function setType($type){
            if(!empty($type)){
              $this->type = $type;
            }
            else {
              throw new Exception("Not a valid type");
            }
          }
          
          public function getGender($gender){
            $this->gender = $gender;
          }
          
          public function setGender($gender){
            if(!empty($gender)){
              $this->gender = $gender;
            }
            else 
              throw new Exception("Not a valid gender");
          }
          
        }
        
        
         class Television extends Product {
          protected $name,$price,$brand,$displayType,$size;
          
           public function getDescriptionforProductType(){
           
           return "This is a {$this->size} {$this->brand}
          {$this->displayType} Television";
          
         }
         
         
         public function getSize($size){
           try{
           if($size == null){
             $err = "Empty value found";
             throw new Exception($err)
             
             echo "Never executed";
           }
           return $this->size;
           
           
           }
         }
         
          
          public function __construct($name,$price,$brand,$displayType,$size){
            
            parent::__construct($name,$price,$brand);
            
            $this->displayType = $displayType;
            $this->size = $size;
          }
        }
        
        $buttondownshirt = new Clothing("Button Down Shirt", 29.98, "J Peterman",29,"Eye piercingly bright red", "Shirt", "Male");
        echo $buttondownshirt->provideDescription();
        
        $giantTV = new Television("Giant TV",3900.90,"Kramerica","LED",100);
        echo "<br />";
        echo $giantTV->provideDescription();
        
    ?>
    </p>
  </body>
</html>