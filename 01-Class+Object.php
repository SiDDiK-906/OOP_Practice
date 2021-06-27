<?php 
	// creating class named as tv
	class tv {
				public $tv_one_id = 1;
				public $tv_two_id = 2;
				public $model = 'Delta';
				public $volume = 1;

				function volumeUp(){
					$this->volume++;
				}
				function volumeDown(){
					$this->volume--;
				}
				function OOP_class($modelOOP='Symentrix',$volumnOOP=6){
					echo "you are doing good"."<br>";
					echo "your model name is ".$modelOOP."<br>";
					echo "your current volumn is ".$volumnOOP."<br>";
				}
			}
			$OOP = new tv;
			$OOP->OOP_class();
			// $first_class_of_OOP->OOP_class('symentrix',5);
	// creating 2 'OBJECT' named as tv_one & tv_two
		// $tv_one = new tv;
		// $tv_two = new tv;

		// echo "Your TV"."(".$tv_one->tv_one_id.")". "Model Name is: ".$tv_one->model."<br>";

		// $tv_one->volumeUp();
		// echo "Current TV"."(".$tv_one->tv_one_id.")". "Volume: ".$tv_one->volume."<br>";

		// $tv_one->volumeDown();
		// echo "Current TV"."(".$tv_one->tv_one_id.")". "Volume: ".$tv_one->volume."<br>";

		// $tv_two->model='Hydra';
		// echo "Your TV"."(".$tv_one->tv_two_id.")". " Model Name is: ".$tv_two->model."<br>";

		// $tv_one->volumeDown();
		// echo "Current TV"."(".$tv_two->tv_two_id.")". "Volume: ".$tv_two->volume."<br>";
?>