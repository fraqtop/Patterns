<?php
spl_autoload_register();
use Adapter\PagePrinter as Printer;

$pagePrinter = new Printer();
$page = [
    'now i will try',
    'to print',
    'multiline',
    'text'
];
$pagePrinter->printPage($page);