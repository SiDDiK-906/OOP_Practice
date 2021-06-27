<?php 

	// class myClass{
	// 	public function myFunction()
	// 	{
	// 		echo "this is my test method and i am gonna test it";
	// 	}
	// }

	// class Another extends myClass{
	// 	public function AnotherF()
	// 	{
	// 		// echo "is it worked!";
	// 		// parent::myFunction();
	// 		$this->myFunction();
	// 	}
	// }
	// $myClass= new Another();
	// $myClass->AnotherF();

	class tv{
		public $volume;
		public $model;

		function volumeUp(){
			$this->volume++;
		}
		function volumeDown(){
			$this->volume--;
		}
		function __construct($m,$v)
		{
			$this->model= $m;
			$this->volume= $v;
		}
	}

	// tv with time + inheritence with tv [here tv is parent class tv_with_time is child class]
	class tv_with_time extends tv{

	}
	$var = new tv_with_time('Delta',3);
	echo $var->model."<br>";
	echo $var->volume."<br>";

	// new tv model 
	class new_tv extends tv_with_time{

	}
	$var_2 = new new_tv('Hydra',5);
	echo $var_2->model."<br>";
	echo $var_2->volume."<br>";

?>