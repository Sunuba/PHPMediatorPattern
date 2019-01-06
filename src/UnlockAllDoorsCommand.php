<?php


namespace Med;


class UnlockAllDoorsCommand implements Command
{
    private $mediator;

    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }

    public function execute()
    {
        $this->mediator->unlockAllDoors();
    }
}