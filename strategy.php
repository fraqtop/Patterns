<?php

interface IDatabase
{
    function  connect($connectionString);
}

class FileDatabase implements IDatabase
{
    function  connect($connectionString)
    {
        echo "successful connection to file database";
    }
}

class MysqlDatabase implements IDatabase
{
    function  connect($connectionString)
    {
        echo "successful connection to mysql database";
    }
}

class  DbContext
{
    private $dBase;

    function __construct(IDatabase $newDbase)
    {
        $this->dBase = $newDbase;
    }

    function setConnection($connString)
    {
        $this->dBase->connect($connString);
    }
}

$connectionString = 'dblib:host=your_hostname;dbname=your_db;charset=UTF-8';

if (strripos($connectionString, "hostname"))
{
    $dbcontext = new DbContext(new MysqlDatabase());
    $dbcontext->setConnection($connectionString);
}
else
{
    $dbcontext = new DbContext(new FileDatabase());
    $dbcontext->setConnection($connectionString);
}