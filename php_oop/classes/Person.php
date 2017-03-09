<?php 
	class Person{
		public $name	 = "Amitosh";
		public $age 	 = "18";
		public $skill 	 = "Bloging";

		private $email 		= "amitosh.seu@gmail.com";
		protected $password = "12312355";
   		
   		function iteratorInner(){
   			echo "Inside Class<br/>";
			foreach ($this as $key => $value) {
			echo "<pre>";
			echo "$key=> $value";
			echo "</pre>";
   		}
   			

		
		}
	}
	

 ?> 