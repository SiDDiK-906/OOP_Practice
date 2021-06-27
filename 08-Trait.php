<?php 
	trait MyFirstClass{
		function myfucntion(){
			echo "this is parent class";
		}
	}
	class ChildClass{
		use MyFirstClass;
	}
	$obj = new ChildClass;
	$obj->myfucntion();
?>