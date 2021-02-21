<?php
	interface iVehicle {
		

		
		public function ride($speed);
	}
	

	class Car implements iVehicle {
	    
	    public function ride($speed) {
	        echo 'Машина может ездить co скоростью ' . $speed . 'км/ч';
	    }
	    
	    public $interiorСolor = 'red';
		public $elementsCar = 'Дворники';
		
		public function turnOnWipers(){
		    echo $this->elementsCar . ' включены';
		}
		public function pushSignal(){
		    echo 'Signal on';
		}
		
	}
	
	class Tank implements iVehicle {
	    
	    private $elementsTank = 'Прицел';

		public function shoot(){
		    echo $this->elementsTank . ' готов!';
		}
		
		public function ride($speed) {
	        echo 'Танк ездит co скоростью ' . $speed . 'км/ч';
	    }
		
	}
	
	class SpecialMachine implements iVehicle {
	    
	    private $elementsSpecial = 'Ковш';
	    
	    public function controlBucket(){
	        echo $this->elementsSpecial . ' работает';
	    }
	    
	   public function ride($speed) {
	        echo 'Спецтехника может ездить co скоростью ' . $speed . 'км/ч';
	    }
	}
	
	$car = new Car;
	$tank = new Tank;
	$specialMachine = new SpecialMachine;
	
    $ridingCar = 150;
    $ridingTank = 20;
    $ridingSpMach = 80;
    
    $car->turnOnWipers();
	echo PHP_EOL;

    
    $car->ride($ridingCar);
	echo PHP_EOL.PHP_EOL;

    $tank->ride($ridingTank);
	echo PHP_EOL;
	$tank->shoot();
	echo PHP_EOL.PHP_EOL;

    $specialMachine->ride($ridingSpMach);
	echo PHP_EOL;
    $specialMachine->controlBucket();
     
?>