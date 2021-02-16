<?php

interface iFamily {

}

class Family implements iFamily{
  public $peopleCount = 4;
  protected $age;
  
  public function respect()
  {
    //...
  }
}

interface iFather extends iFamily {

}

class Father implements iFather {
  public $age = 40;
  public $wife = 'Helen';
  protected $housework = 'cleanUp';
  
  public function helpingMother() {
    echo $this->housework;
  }
}

interface iMother extends iFamily {

}
class Mother implements iMother {
    public $age = 35;
    public $husband = 'Mike';
    protected $cook = 'different';
    
  public function feedTheFamily() {
      echo $this->cook;
    }
  }

interface iChild extends iFather, iMother {

}


class Child implements iChild {
  public $age = 15;
  public $sex = 'man';
  
  public function helpingMother() {
    echo 'I throw out the garbage';
  }

}

$Child = new Child;
var_dump($Child);
$Child->helpingMother();