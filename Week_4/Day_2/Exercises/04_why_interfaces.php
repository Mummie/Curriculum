<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <p>
    <?php
        /**
         * So we want to create a feature that allows you to store your movies in our 'cloud'.
         *
         * We want to make sure that you can find and catalog your movies correctly, so we
         * would like to give users the ability to provide a description of these movies.
         *
         * We want users to also see any products they have ordered on the same page.
         *
         * Create a class called CloudMovieFile that also implements the Describable interface.  Use your imagination on
         * how this should describe itself.  Create an instance of Cloud movie.  Now create a Clothing object and a
         * Television object from the classes you built in the previous exercise.  Put these 3 objects in an array
         * names $customerItems.
         *
         * Create a new class called ItemDescriber.  Item describer should contain a method called
         * outputDescription.  This method should take an object that implements the Describable interface
         * as a parameter.  If the parameter does not implement the Describable interface, throw an exception
         * Otherwise, the outputDescription method should printout the description of the object that is passed in.
         *
         * @see  http://php.net/manual/en/language.operators.type.php
         *
         * For each object in the array, use the ItemDescriber to print out the description of all of your Describable
         * objects.
         *
         * Note that we can treat anything that wants to implment describable exactly the same, whether it is a
         * Product or a CloudMovieFile.  You could even create a Person class that implements Describable and
         * run it through the ItemDescriber method.
         */


        ///////////////////////////
        // Put your code here!
        ///////////////////////////
         interface Describable {
          public function provideDescription();
          
        }
        
        class CloudMovieFile implements Describable {
          public function provideDescription(){
             return "Cloud Movie File returning $customerItems";
         }
          
          }
        $CloudMovieFile = new CloudMovieFile();
          $Clothing  = new Clothing();
          $Television  = new Television();
          
          $customerItems = array(cloudMovie,clothes,television);
        
        
      class ItemDescriber {
        public function outputDescription(Describable $cloudMovie){
         return $cloudMovie->provideDescription();
         
        
      }
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
              }
            }
          
         
              
              else{
                throw new Exception("Not a valid color");
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