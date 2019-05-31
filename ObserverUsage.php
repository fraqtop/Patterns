<?php
spl_autoload_register();
use Observer\{SecurityManager, Logger, MailingNotifier};

$manager = new SecurityManager();

new Logger($manager);
new MailingNotifier($manager);

$manager->checkPermissions([
    'name' => 'Howard Moon',
    'permissionLevel' => 3
]);