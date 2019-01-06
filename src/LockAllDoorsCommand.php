<?php


namespace Med;


class LockAllDoorsCommand implements Command
{
    private $mediator;

    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }

    public function execute()
    {
        $this->mediator->lockAllDoors();
    }
}