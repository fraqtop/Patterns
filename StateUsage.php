<?php
spl_autoload_register();
use State\Fighter;

$fighter = new Fighter();
$fighter->makeReaction("attack");
$fighter->makeReaction("defend");
$fighter->makeReaction("massive hook");