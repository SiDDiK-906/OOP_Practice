<?php 
	// interface one{
	// 	protected function test();
		
	// }
	// class two{
	// 	function myMethod(){
	// 		echo "this is myMethod()";
	// 	}
	// }
	// class three extends two implements one{
	// 	function test(){
	// 		$this->test();
	// 		echo "this is test 1 method";
	// 	}
	// }
	// $res = new three;
	// $res-> test();
	
	interface one{
		public function test();
		
	}
	class two implements one{
		function test(){
			echo "this is myMethod()";
		}
	}
	$res = new two;
	$res-> test();
?>	