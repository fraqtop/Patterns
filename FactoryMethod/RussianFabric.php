<?php

namespace FactoryMethod;


class RussianFabric implements IFabric
{
    public function createDevice() : IDevice
    {
        return new Yotaphone();
    }

}