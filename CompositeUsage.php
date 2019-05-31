<?php
spl_autoload_register();

use Composite\{OrdinaryTask, ImportantTask, Goal};

$goal = new Goal();
$goal->addTask(new ImportantTask());
$goal->addTask(new OrdinaryTask());
$mainGoal = new Goal();
$mainGoal->addTask($goal);
$mainGoal->addTask(new OrdinaryTask());
echo $mainGoal->getPriority(), PHP_EOL;
$mainGoal->removeTask($goal);
echo $mainGoal->getPriority();