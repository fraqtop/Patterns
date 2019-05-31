<?php
spl_autoload_register();

use Visitor\{Computer, OverclockVisitor,DumpVisitor};

$computer = new Computer();
$computer->accept(new OverclockVisitor());
$computer->accept(new DumpVisitor());