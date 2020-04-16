<?php
spl_autoload_register();
use Strategy\{DatabaseContext, MysqlDatabase, FileDatabase};

$connectionString = 'dblib:host=your_hostname;dbname=your_db;charset=UTF-8';
if (strripos($connectionString, "hostname"))
{
    $dbContext = new DatabaseContext(new MysqlDatabase());
}
else
{
    $dbContext = new DatabaseContext(new FileDatabase());
}
$dbContext = mb_strpos($connectionString, 'client') ? new DatabaseContext(new MysqlDatabase()):
    new DatabaseContext(new FileDatabase());

$dbContext->setConnection($connectionString);