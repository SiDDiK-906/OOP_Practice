<?php 
	class tv{
		// private > protected > public (encapsulation ranking for secure data)
		// private data hoile seta tar class er baire kono child class eo use hobe na + nij class object eo ei private data access kora jay na. only oi class er vitore ei use kora jaabe
		// protected data parent class + child class eo use kora jay
		// public sob jaygay use kora jay
		private $volume;
		protected $model;

		function volumeUp(){
			$this->volume++;
		}
		protected function volumeDown(){
			$this->volume--;
		}
		function getModel(){
			return $this->model;
		}
		function __construct($m,$v)
		{
			$this->model= $m;
			$this->volume= $v;
		}
	}

	class delta extends tv{
		// function overwrite korar somoy parent function er higher encapsulation use korte parbo na
		public function getModel()
		{
			return $this->model;
		}
	}
	$tv = new delta('Hydra TV',3);
	echo $tv->getModel();

	$tv_main = new tv('Delta TV',5);
	echo $tv_main->getModel();


?>