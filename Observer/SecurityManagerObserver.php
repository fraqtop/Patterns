<?php


namespace Observer;


use SplSubject;

abstract class SecurityManagerObserver implements \SplObserver
{
    protected $subject;
    abstract protected function process();

    public function update(SplSubject $subject)
    {
        if ($this->subject === $subject){
            $this->process();
        }
    }

    public function __construct(SecurityManager $newSecurityManager)
    {
        $this->subject = $newSecurityManager;
        $this->subject->attach($this);
    }
}