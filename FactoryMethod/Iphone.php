<?php
/**
 * Created by PhpStorm.
 * User: programmer
 * Date: 08.06.2018
 * Time: 13:56
 */

namespace FactoryMethod;


class Iphone implements IDevice
{
    public function takePhoto()
    {
        echo "iphone is making a photo", PHP_EOL;
    }

    public function makeCall()
    {
        echo "iphone is calling", PHP_EOL;
    }
}