<?php

namespace Adapter;

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