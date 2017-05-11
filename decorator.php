<?php

interface IRectangle
{
    function drawShape();
}


class Form implements IRectangle
{
    function drawShape() {
        echo "form was drowed</br>";
    }
}


class Window implements IRectangle
{
    function drawShape()
    {
        echo "window was drawed</br>";
    }

}


abstract class AbstractDecorator implements IRectangle
{
    protected $rectangle;
    abstract function afterDraw();
    function drawShape()
    {
        $this->rectangle->drawShape();
        $this->afterDraw();
    }

    function __construct(IRectangle $newComponent)
    {
        $this->rectangle = $newComponent;
    }
}

class BorderDecorator extends AbstractDecorator
{
    function afterDraw()
    {
        echo "...with border </br>";
    }
}

class ColorDecorator extends AbstractDecorator
{
    function afterDraw()
    {
        echo "...with the other color</br>";
    }
}

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