<?php 

class Animal
{
	public $legs = 2;
	public $cold_blooded = false;
	
	public function __construct($name)
	{
		$this->name = $name; 
	}

	function getName()
	{
		echo $this->name;
	}

	function getYell()
	{
		echo $this->yell;
	}

	function getJump()
	{
		echo $this->jump;
	}
}

 ?>