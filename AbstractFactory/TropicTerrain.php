<?php


namespace AbstractFactory;


class TropicTerrain extends AbstractTerrain
{
    public function getAnimal(): IAnimal
    {
        return new Monkey();
    }

    public function getBird(): IBird
    {
        return new Parrot();
    }


}