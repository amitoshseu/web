<?php 
	abstract class BaseEmployee{
		protected $firstname; 
		protected $lastname; 

		public function getFullName()
		{
			return $this->firstname . " " . $this->lastname;
		}

		public abstract function getMonthlySalary();

		public function __construct($f,$l)
		{
			$this->firstname = $f;
			$this->lastname = $l; 
		}

	}

	class FullTimeEmployee extends BaseEmployee{
		protected $annualSalary;

		public function getMonthlySalary()
		{
			return $this->annualSalary/12;
		}
	}

	class ContractEmployee extends BaseEmployee{
		protected $hourlyRate;
		protected $totalHours;

		public function getMonthlySalary()
		{
			return $this->hourlyRate * $this->totalHours;
		}

	}


	$fulltime = new FullTimeEmployee('Fulltime', 'Employee');
	$contract = new ContractEmployee('Contract', 'Employee');

	echo $fulltime->getFullName();
	echo "<br>";
	echo $contract->getFullName();
	echo "<br>";

	echo $fulltime->getMonthlySalary();
	echo "<br>";
	echo $contract->getMonthlySalary();

 ?>