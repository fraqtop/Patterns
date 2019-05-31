<?php


namespace Observer;



class MailingNotifier extends SecurityManagerObserver
{
    protected function process()
    {
        echo 'mail was delivered to administrator', PHP_EOL;
    }
}