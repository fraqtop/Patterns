<?php


namespace AbstractFactory;


class ArcticTerrain extends AbstractTerrain
{
    public function getBird(): IBird
    {
        return new Owl();
    }

    public function getAnimal(): IAnimal
    {
        return new PolarBear();
    }

}