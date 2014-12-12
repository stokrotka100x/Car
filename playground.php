<?php

require_once('Car.php');
require_once('Engine.php');
require_once('RaceEngine.php');

$engine = new Engine();
$raceEngine = new RaceEngine();

$myCar = new Car($raceEngine);

echo $myCar->getAcceleration();
echo "\n";
echo $myCar->getVMax();
echo "\n";