<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
      <p>
        <?php
        /**
         * you have array and lets say we got this data from the DB so we cant change it when getting it from the DB 
         * so writing the correct syntax to remove the teachers that are not suppoes to be there
         */
        $teachers = [
            "Josph Backer",
            "Tim Berners-Lee", // creator of html
            "Aric Schwartzenegger",
            "Brendan Eich", // creator of javascript
            "James Dallas",
            "Rasmus Lerdorf" // creator of php
        ];
        
        foreach($teachers as $key=>$val){
            $arr = [1,3,5];
            if(in_array($key,$arr)){
                unset($teachers[$key]);
                
            }
        
        }
        
       asort($teachers);
        print_r($teachers);
        
      ?>
      </p>
	</body>
</html>