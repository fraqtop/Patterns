<?php

interface IDevice
{
    function takePhoto();
    function makeCall();
}


interface IFabric
{
    public function createDevice() : IDevice;
}


class Iphone implements IDevice
{
    public function takePhoto()
    {
        echo "iphone is making a photo";
    }

    public function makeCall()
    {
        echo "iphone is calling";
    }
}


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


class AmericanFabric implements IFabric
{
    public function createDevice() : IDevice
    {
        return new Iphone();
    }

}


class RussianFabric implements IFabric
{
    public function createDevice() : IDevice
    {
        return new Yotaphone();
    }

}

$rusFabric = new RussianFabric();
$usaFabric = new AmericanFabric();
$device = $rusFabric->createDevice();
$device->makeCall();
echo "</br>";
$device = $usaFabric->createDevice();
$device->takePhoto();