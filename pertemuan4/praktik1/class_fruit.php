<?php
    
    class Fruit {
        // property 
        public $name = "Apple" ;
        public $color = "Red"; 

        //method
        function getName (){
            return $this->name;
        }
        function getColor (){
            return $this->color;
        }
    } 
    // code class Fruit
  
    // Object Apple
    $apple = new Fruit();
    $apple->name = "Apple";
    $apple->color = "Red";
      // Object Banana
    $banana = new Fruit();
    $banana->name = "Banana";
    $banana->color = "Yellow";
    
      // Tampilkan
    echo $apple->getName();
    echo $apple->getColor();
    echo "<br><br>";
    echo $banana->getName();
    echo $banana->getColor();
?>
