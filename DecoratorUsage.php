<?php
spl_autoload_register();
use Decorator\{Window, Form, ColorDecorator, BorderDecorator};

$window = new Window();
$window->drawShape();
echo "_______________</br>";
$smartWindow = new BorderDecorator( new ColorDecorator( new Window()));
$smartWindow->drawShape();
echo "________________</br>";
$form = new Form();
$form->drawShape();
echo "________________</br>";
$smartForm = new BorderDecorator(new ColorDecorator(new Form()));
$smartForm->drawShape();