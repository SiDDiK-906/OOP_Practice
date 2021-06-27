<!-- Acces Modifier -->
<?php 
		class myClass{
			public function myFunction()
			{
				echo "this is my test method and i am gonna test it";
			}
			private function myPrivate(){
				echo "this is private method";
			}
			public function AnotherDupli(){
				$this->myPrivate();
			}
			protected function myProtected(){
				echo "this is protected method";
			}
		}
		
		class Another extends myClass{
			public function AnotherF()
			{
				$this->myFunction();
			}
			public function duplicateMethod(){
				$this->myprotected();
			}
		}
		$myClass= new Another();

		$myClass->AnotherDupli();
?>