<?php
spl_autoload_register();
use FactoryMethod\{RussianFabric, AmericanFabric};

$rusFabric = new RussianFabric();
$usaFabric = new AmericanFabric();
$device = $rusFabric->createDevice();
$device->makeCall();
echo "</br>";
$device = $usaFabric->createDevice();
$device->takePhoto();