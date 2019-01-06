<?php


namespace Med;


class Lock implements LockInterface
{
    public $isLocked = false;
    public $place;

    public function __construct(string $place)
    {
        $this->place = $place;
    }

    # Toggle light status, if it is on, turn it off and vice versa.
    public function toggle()
    {
        if ( $this->isLocked) {
            $this->off();
            $this->isLocked = false;
        } else {
            $this->on();
            $this->isLocked = true;
        }
    }

    public function on()
    {
        echo $this->place . ' door is locked. ';
    }

    public function off()
    {
        echo $this->place . ' door is unlocked. ';
    }
}