<?php
spl_autoload_register();
use Adapter\PagePrinter as PagePrinter;

$pagePrinter = new PagePrinter();
$page = array();
$page[] = "don't look back";
$page[] = "life is short";
$page[] = "more to play";
$page[] = "less to work";
$pagePrinter->printPage($page);