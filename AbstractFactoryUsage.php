<?php
spl_autoload_register();
use AbstractFactory\{Jeep, Ferrari};

$ferrari = new Ferrari();
$jeep = new Jeep();

$ferrari->bump();
$jeep->rotateWheels();