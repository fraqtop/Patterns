<?php


namespace Observer;


use SplObserver;

class SecurityManager implements \SplSubject
{
    private $listeners;
    private const REQUIRED_PERMISSION_LEVEL = 5;

    public function attach(SplObserver $observer)
    {
        $this->listeners->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->listeners->detach($observer);
    }

    public function notify()
    {
        foreach ($this->listeners as $listener) {
            $listener->update($this);
        }
    }

    public function checkPermissions(array $userData)
    {
        if ($userData['permissionLevel'] < self::REQUIRED_PERMISSION_LEVEL){
            $this->notify();
        }
    }

    public function __construct()
    {
        $this->listeners = new \SplObjectStorage();
    }

}