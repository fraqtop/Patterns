<?php
spl_autoload_register();
use State\Fighter;

$fighter = new Fighter();
for ($i = 0; $i < 3; ++$i) {
    $fighter->react();
}