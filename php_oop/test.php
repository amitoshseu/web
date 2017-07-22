<?php 
	class TV{
		public $model;
		public $volume;

		function volumeUp(){
			$this->volume++;
		}

		function volumeDown(){
			$this->volume--;
		}

		function __construct($m,$v){
			$this->model = $m;
			$this->volume = $v;
		}
	}

 ?>