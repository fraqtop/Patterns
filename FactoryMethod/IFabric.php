<?php

namespace FactoryMethod;


interface IFabric
{
    public function createDevice() : IDevice;
}