<?php

namespace Strategy;


class MysqlDatabase implements IDatabase
{
    function  connect($connectionString)
    {
        echo "successful connection to mysql database";
    }
}