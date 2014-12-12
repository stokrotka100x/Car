<?php

require_once('CarInterface.php');
require_once('EngineInterface.php');

class Car implements CarInterface
{
	private $engine;
	
	public function __construct(EngineInterface $engine)
	{
		$this->engine = $engine;
	}
	
	public function run()
	{
		echo 'Hello Car';
	}
	
	public function getEngine()
	{
		return $this->engine;
	}
	
	public function getVMax()
	{
		return 1.45 * $this->getEngine()->getHP(); 
	}
	
	public function getAcceleration()
	{
		return $this->getEngine()->getHP()/100;
	}
}
