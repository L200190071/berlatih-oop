<?php 

class Frog extends Animal
{
	public $jump = "hop hop";
	public $legs = 4;
	public function __construct($name)
	{
		$this->name = $name;
	}
}

/*
Buat function setLegs($legs) //assign value legs, bisa di set dri index.php
Buat Function getLegs() //return legs
Buat function nya di class animal
*/
?>