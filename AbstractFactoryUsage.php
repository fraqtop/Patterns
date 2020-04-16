<?php
spl_autoload_register();
use AbstractFactory\{ArcticTerrain, TropicTerrain};

$terrain = random_int(0, 1) ? new ArcticTerrain(): new TropicTerrain();

$animal = $terrain->getAnimal();
$bird = $terrain->getBird();

$animal->walk();
$bird->fly();