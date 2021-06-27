<?php 
	class tv{
		public $volume;
		public $model;

		function volumeUp(){
			$this->volume++;
		}
		function volumeDown(){
			$this->volume--;
		}
		function __construct()
		{
			$this->model= 'hello tv';
			$this->volume= 3;
		}
	}

	// tv with time + inheritence with tv [here tv is parent class tv_with_time is child class]
	class tv_with_time extends tv{

	}
	$var = new tv_with_time;
	echo $var->model."<br>";
	echo $var->volume."<br>";

	// construction overwrite
	echo "<h3>Construction Overwrite</h3> ";
	
	class const_overwrite extends tv_with_time{
		// this construct function just overwrite the pervious construct from very parent class(tv)
		function __construct()
		{
			$this->model= 'new model tv is here';
			$this->volume= 5;
		}
	}
	$var_3 = new const_overwrite;
	echo $var_3->model."<br>";
	echo $var_3->volume."<br>";
?>