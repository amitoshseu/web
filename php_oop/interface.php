<?php 
	interface a {
		public function abc();

	}

	interface b {
		public function xyz();
	}

	class c implements a, b{
		public function abc()
		{
			echo 'abc functon';
		}

		public function xyz()
		{
			echo 'xyz function';
		}
	}
	

	
 ?>