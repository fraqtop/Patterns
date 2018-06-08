<?php

namespace Strategy;


interface IDatabase
{
    function  connect($connectionString);
}