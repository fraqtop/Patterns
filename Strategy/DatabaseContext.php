<?php

namespace Strategy;


class  DatabaseContext
{
    private $base;

    function __construct(IDatabase $newBase)
    {
        $this->base = $newBase;
    }

    function setConnection($connString)
    {
        $this->base->connect($connString);
    }
}