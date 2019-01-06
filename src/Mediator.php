<?php


namespace Med;


class Mediator
{
    private $locks = [];

    public function registerLock(Lock $lock)
    {
        array_push($this->locks, $lock);
    }

    public function lockAllDoors()
    {
        foreach ($this->locks as $lock)
        {
            if ( !$lock->isLocked)
            {
                $lock->toggle();
            }
        }
    }

    public function unlockAllDoors()
    {
        foreach ($this->locks as $lock)
        {
            if ( $lock->isLocked )
            {
                $lock->toggle();
            }
        }
    }

}