<?php
spl_autoload_register();
use Singleton\Coach;

for ( $i = 0 ; $i < 3 ; $i++ )
{
    Coach::getInstance()->changeFormation();
    echo "</br>";
}