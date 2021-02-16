<?php
	interface iVehicle {
		
		public function ride();
		
	}
	
	abstract class Vehicle implements iVehicle {
		
		public function ride(){
		    echo 'ride';
		}
		
	}
	
	class Car extends Vehicle {
	    
	    public $interiorСolor = 'Red';
		
		
		public function turnOnWipers(){
		    echo 'move wipers';
		}
		public function pushSignal(){
		    echo 'Signal on';
		}
		
	}
	
	class Tank extends Vehicle {

		public function shoot(){
		    echo 'shoot on';
		}
		
	}
	
	class SpecialMachine extends Vehicle {
	    
	    public function controlBucket(){
	        echo 'Bucket run';
	    }
	}
	
	$Car = new Car;
	//$iVehicle = new Car;
	$Tank = new Tank;
	$SpecialMachine = new SpecialMachine;
	
	
    function Run(iVehicle $Car) {
        $Car->turnOnWipers();
    }
	echo $Car->interiorСolor.PHP_EOL;
    
    Run($Car);
     
?>