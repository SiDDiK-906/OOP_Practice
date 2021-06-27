<?php 
	abstract class one{
		abstract protected function test();
	}
	class two extends one{
		public function test2(){
			echo "this is test child method";
		}
		public function test(){
			echo "this is test parent method";
		}
	}
	$res = new two;
	$res -> test();
?>