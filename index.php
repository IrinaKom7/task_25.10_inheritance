<?php

abstract class Family
{
    public $peopleCount = 3;
    abstract protected function count();

}

class Father extends Family {
    
    public $wife = 'Елена';
    public $age = 45;
    
    public function printNameW() {
        echo "Имя моей жены " . $this->wife;
    }
    
    public function printAge() {
        echo "Мне " . $this->age . " лет";
    }
    
    public function count(){
        echo "Количество человек в семье" . " - " . $this->peopleCount;
    }
}

class Mother extends Family {

    public $husband = 'Иван';
    public $age = 40;
    
    public function printAge() {
        echo "Мне " . $this->age . " лет";
    }
    
    public function count(){
        echo "Количество человек в семье" . " - " . $this->peopleCount;
    }
    
    public function printNameH() {
        echo "Имя мужа " . $this->husband;
    }

}

class Child extends Family {

    public $sex = 'мужской';
    public $age = 15;
    
    public function printSex() {
        echo "Пол ребенка " . $this->sex;
    }
    
    public function count(){
        echo "Количество человек в семье" . " - " . $this->peopleCount;
    }

}

$father = new Father();
$mother = new Mother();
$child = new Child();


$child->printSex();
echo PHP_EOL;
$child->count();

