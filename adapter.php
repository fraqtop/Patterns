<?php

class Printer
{
    function printString(string $str)
    {
        echo "$str  --- printed by printer</br> ";
    }
}


class PagePrinter
{
    private $printer;
    function printPage($page)
    {
        foreach ($page as $textLine)
        {
            $this->printer->printString($textLine);
        }
    }

    public function __construct()
    {
        $this->printer = new Printer();
    }
}

$printer = new PagePrinter();
$page = array();
$page[] = "don't look back";
$page[] = "life is short";
$page[] = "more to play";
$page[] = "less to work";
$printer->printPage($page);