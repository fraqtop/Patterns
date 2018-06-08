<?php

namespace Strategy;


class FileDatabase implements IDatabase
{
    function  connect($connectionString)
    {
        echo "successful connection to file database";
    }
}