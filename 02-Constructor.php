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
		// here is our constructor construction ke function call er moto kore call korte hoy na just object create korlei enough
		// function __construct($m, $v)
		// {
		// 	$this->model= $m;
		// 	$this->volume= $v;
		// }
		function __destruct()
		{
			echo "destruct method alwyas sobar nichei asbe jodio er code amra upore lekhi";
		}
		function OOP_class($modelOOP='Symentrix',$volumnOOP=6){
			echo "you are doing good"."<br>";
			echo "your model name is ".$modelOOP."<br>";
			echo "your current volumn is ".$volumnOOP."<br>";
		}
		function __construct()
		{
			echo "como estas, construct method sobar aage execute hoy"."<br>";
		}
	}
	$OOP = new tv;
	$OOP->OOP_class();

	// $var = new tv('Delta', 2);
	// $var_2= new tv('Hydra', 1);
	
	// echo $var->model."<br>";
	// echo $var->volume."<br>";
	// echo $var_2->model."<br>";
	// echo $var_2->volume."<br>";
?>