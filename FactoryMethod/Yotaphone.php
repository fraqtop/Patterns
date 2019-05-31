<?php

namespace FactoryMethod;


class Yotaphone implements IDevice
{
    function takePhoto()
    {
        echo "yotaphone is making a photo", PHP_EOL;
    }

    function makeCall()
    {
        echo "yotaphone is calling", PHP_EOL;
    }
}