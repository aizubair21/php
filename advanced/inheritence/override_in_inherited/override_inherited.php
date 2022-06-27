 <?php
 //parent class
class Fruit {
  public $name;
  public $color;
  
  //define construct magic method
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

//child class
class Strawberry extends Fruit {
  public $weight;
  
  //redifine construct method. this method is override into parent class.
  public function __construct($name, $color, $weight) {
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
  }
  //this also override
  public function intro() {
    echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
  }
}

$strawberry = new Strawberry("Strawberry", "red", 50);
$strawberry->intro(); //child intro work,


/**
* but, with 'final' key we can prevent this colution. 
* 
*/
final class Fruit { //now this is prevent from inheritence, al well al method override
  public $name;
  public $color;
  
  //define construct magic method
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

?> 