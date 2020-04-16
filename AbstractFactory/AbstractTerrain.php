<?php


namespace AbstractFactory;


abstract class AbstractTerrain
{
    abstract public function getBird(): IBird;
    abstract public function getAnimal(): IAnimal;
}