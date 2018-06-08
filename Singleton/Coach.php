<?php

namespace Singleton;


class Coach
{
    private $changedFormation;
    private static $instance;

    public function changeFormation()
    {
        $this->changedFormation++;
        echo "formation changed $this->changedFormation times";
    }

    public static function getInstance()
    {
        if (self::$instance == null)
        {
            self::$instance = new Coach();
        }
        return self::$instance;
    }

    private function __construct()
    {
        $this->changedFormation = 0;
    }
    private function __clone()
    {

    }
}