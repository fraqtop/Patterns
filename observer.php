<?php

interface IListener
{
    function react($string);
}

class Publisher
{
    private $listeners;
    function addListener(IListener $newListener)
    {
        $this->listeners[] = $newListener;
    }
    function removeListener ($index)
    {
        if (count($this->listeners)>$index)
        {
            array_splice($this->listeners, $index, 1);
        }
    }
    function notifyListeners($command)
    {
        foreach ($this->listeners as $listener)
        {
            $listener->react($command);
        }
    }
    function publish($string)
    {
        echo "publisher published: $string </br>";
        $this->notifyListeners($string);
    }
}

class Listener implements IListener
{
    function react($string)
    {
        echo "listener read: $string </br>";
    }
}

$publisher = new Publisher();
$publisher->addListener(new Listener());
$publisher->addListener(new Listener());
$publisher->publish("the winter is coming");