<?php
spl_autoload_register();
use Observer\{Publisher, Listener};

$publisher = new Publisher();
$publisher->addListener(new Listener());
$publisher->addListener(new Listener());
$publisher->publish("the winter is coming");