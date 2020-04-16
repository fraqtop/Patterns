<?php
spl_autoload_register();
use FactoryMethod\{Bow, Handgun};

$concreteWeapon = (boolean)random_int(0, 1)? new Handgun(): new Bow();

echo $concreteWeapon->shot();