<?php

namespace FactoryMethod;


class Yotaphone implements IDevice
{
    function takePhoto()
    {
        echo "yotaphone is making a photo";
    }

    function makeCall()
    {
        echo "yotaphone is calling";
    }
}