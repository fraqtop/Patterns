<?php

namespace FactoryMethod;


class AmericanFabric implements IFabric
{
    public function createDevice() : IDevice
    {
        return new Iphone();
    }

}